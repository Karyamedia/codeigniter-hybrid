<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use \Illuminate\Database\Eloquent\Model as Eloquent;
use \Illuminate\Database\Capsule\Manager as Capsule;

class Attendance extends Illuminate\Database\Eloquent\Model {}
class Action extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file Action.php */
/* Location: ./application/models/Action.php */