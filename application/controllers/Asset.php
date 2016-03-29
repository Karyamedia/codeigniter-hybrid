<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;

class Asset extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function css()
	{
		$csspath = FCPATH.'resources/css/';
		switch ($this->uri->segment(3)) {
			
		    case 'core':
				$css = new AssetCollection(array(
				    // new GlobAsset(FCPATH.'assets/js/*'),
				    new FileAsset($csspath.'bootstrap.min.css'),
				    new FileAsset($csspath.'plugins.css'),
				    new FileAsset($csspath.'main.css'),
				    new FileAsset($csspath.'themes.css'),
				));
				 
				// the code is merged when the asset is dumped
				header("Content-type: text/css; charset: UTF-8");
				echo $css->dump();
		        break;

		    case 'print_page':
				$css = new AssetCollection(array(
				    // new GlobAsset(FCPATH.'assets/js/*'),
				    new FileAsset($csspath.'bootstrap.min.css'),
				    new FileAsset($cssplugin.'font-awesome/css/font-awesome.min.css'),
				    new FileAsset($cssplugin.'ionicon/css/ionicons.min.css'),
				    new FileAsset($csspath.'material-design-iconic-font.min.css')
				));
				 
				// the code is merged when the asset is dumped
				header("Content-type: text/css; charset: UTF-8");
				echo $css->dump();
		        break;


		}
	}

	public function js()
	{
		$jspath = FCPATH.'resources/js/';
		switch ($this->uri->segment(3)) {

			case 'core':
				$js = new AssetCollection(array(
				    new FileAsset($jspath.'vendor/modernizr-respond.min.js'),
				    new FileAsset($jspath.'vendor/jquery-1.11.3.min.js'),
				    new FileAsset($jspath.'vendor/bootstrap.min.js'),
				    new FileAsset($jspath.'plugins.js'),
				    new FileAsset($jspath.'app.js'),
				    new FileAsset($jspath.'pages/login.js'),
				));
				 
				// the code is merged when the asset is dumped
				// header('Content-Type: text/javascript');
				echo $js->dump();
		        break;

		    case 'login':
				$js = new AssetCollection();				 
				// the code is merged when the asset is dumped
				// header('Content-Type: text/javascript');
				echo $js->dump();
		        break;

		}


	}

}