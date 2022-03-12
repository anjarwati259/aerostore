<?php

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//$this->simple_login->cek_login();
		//$this->load->model('admin_model');
	}

	public function index()
	{
		$data = array('title' => 'Dashboard Admin',
                        'isi' => 'home/home' );
        $this->load->view('home/layout/wrapper',$data, FALSE);
	}
}