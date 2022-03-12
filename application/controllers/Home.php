<?php

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//$this->simple_login->cek_login();
		$this->load->model('admin_model');
		$this->load->model('home_model');
	}

	public function index()
	{
		$data_game = $this->admin_model->data_game();
		$data = array('title' => 'Dashboard Admin',
						'data_game' => $data_game,
                        'isi' => 'home/home' );
        $this->load->view('home/layout/wrapper',$data, FALSE);
	}
	public function detail($id){
		$detail = $this->home_model->detail($id);
		$data_paket = $this->home_model->get_paket($id);
		$data = array('title' => 'Dashboard Admin',
						'detail' => $detail,
						'data_paket' => $data_paket,
                        'isi' => 'home/detail.php' );
        $this->load->view('home/layout/wrapper',$data, FALSE);
	}
}