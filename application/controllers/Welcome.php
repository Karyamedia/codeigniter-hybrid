<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// use \Illuminate\Database\Eloquent\Model as Eloquent;
// use \Illuminate\Database\Capsule\Manager as Capsule;

// class tablename(s) extends Illuminate\Database\Eloquent\Model {}

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $this->twig->render('welcome_message', array(

	        'title' => "Hello Mentoring",
	        'elapsed_time' => $this->benchmark->elapsed_time(),
	        'version' => (ENVIRONMENT === 'development') ? CI_VERSION : '',
	    ));

	    // https://laravel.com/docs/5.2/queries or https://laravel.com/docs/4.2/eloquent

	    // eloquent ORM
	    //$ss = Attendance::select('nama', 'email')->where('att_d1', '=', 1)->get();

	    // suggest user capsule
	    //$users = Capsule::table('attendance')->where('att_d1', '=', 1)->get();

	    //echo $att->nama;
	    //Console::log($att);

	    //foreach ($users as $user)
		//{
		//    echo $user->email;
		//}

	    // Redis Cache Driver If Enabled
	    // if ($this->cache->redis->is_supported()) {
	    // 	Console::log($this->cache->redis->cache_info());
	    // }
		
	}

}
