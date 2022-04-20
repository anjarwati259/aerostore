<?php 
/**
 * 
 */
class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->load->model('pelanggan_model');
    // $this->load->model('wilayah_model');
  }
  //halaman login
  public function index()
  {
  	//validasi
    $this->form_validation->set_rules('username','username','required',
        array(  'required'  => '%s harus diisi'));
    $this->form_validation->set_rules('password','Password','required',
        array(  'required'  => '%s harus diisi'));

    if($this->form_validation->run())
    {
      $username   = $this->input->post('username');
      $password   = $this->input->post('password');
      //proses ke simple login
      $this->simple_login->login($username,$password);
    }
    //end validasi
  	$this->load->view('admin/login');
  }
  //fungsi logout
  public function logout()
  {
    //ambil fungsi logout dari simple_login
    $this->simple_login->logout();
  }
}