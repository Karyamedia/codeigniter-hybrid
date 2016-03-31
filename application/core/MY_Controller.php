<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		// debug profiler
		if($this->config->item('debug'))
		{
			$this->output->enable_profiler(TRUE);
		}
		else
		{
			$this->output->enable_profiler(FALSE);
		}

		log_message('debug', 'MY_Controller : MY_Controller class loaded');

	}

	function request_time()
	{
		return number_format(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 3);
	}

	function version()
	{
		return (ENVIRONMENT === 'development') ? CI_VERSION : '';
	}
}