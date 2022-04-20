<?php

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//$this->simple_login->cek_login();
		date_default_timezone_set("Asia/Jakarta");
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
		$kode = substr(str_shuffle('0123456789'),1,8);
		$biaya_admin = substr(str_shuffle('0123456789'),1,3); 
		$id_transaksi = 'TX-'. $kode;
		$detail = $this->home_model->detail($id);
		$data_paket = $this->home_model->get_paket($id);
		$data = array('title' => 'Dashboard Admin',
						'detail' => $detail,
						'id_pesan' => $id_transaksi,
						'data_paket' => $data_paket,
                        'isi' => 'home/detail.php' );
        $this->load->view('home/layout/wrapper',$data, FALSE);
	}
	public function add_transaksi(){
		$kode = substr(str_shuffle('0123456789'),1,8);
		$biaya_admin = substr(str_shuffle('0123456789'),1,3); 
		$id_transaksi = 'TX-'. $kode;

		$userid = $this->input->post('userid');
		$zoneid = $this->input->post('zoneid');
		$id_game = $this->input->post('id_game');
		$id_paket = $this->input->post('id');
		$harga = $this->input->post('harga');
		$no_hp = $this->input->post('no_hp');
		$bayar = $this->input->post('bayar');
		$nama = $this->input->post('nama');
		$total_bayar = $harga + $biaya_admin;

		$data = array('id_transaksi' => $id_transaksi,
						'id_game' => $id_game,
						'userid' => $userid,
						'zoneid' => $zoneid,
						'id_paket' => $id_paket,
						'total_bayar' => $total_bayar,
						'no_telp' => $no_hp,
						'rekening' => $bayar,
						'nama_user' => $nama,
						'biaya_admin' => $biaya_admin,
						'metode_bayar' => 0,
						'tgl_transaksi' => date('Y-m-d h:i:sa'),
						'status' => 201,
				 );
		if($id_paket == ''|| $bayar == ''){
			echo json_encode(array('status' => 'gagal'));
		}else{
			$this->home_model->pesan($data);
			echo json_encode(array('status' => 'sukses',
	            					'id_transaksi' => $id_transaksi ));
		}
	}
	public function invoice($id){
		$data_pesan = $this->home_model->get_pesan($id);
		$data = array('title' => 'Invoice',
						'data_pesan' => $data_pesan,
                        'isi' => 'home/invoice.php' );
        $this->load->view('home/layout/wrapper',$data, FALSE);
	}
	public function invoice2(){
		$data = array('title' => 'Invoice',
                        'isi' => 'home/invoice_2.php' );
        $this->load->view('home/layout/wrapper',$data, FALSE);
	}
	public function detail_invoice(){
		$id = $this->input->post('id');
		//echo json_encode($id);
		$data = $this->home_model->get_pesan($id);
		echo json_encode($data);
	}

	public function print($id){
		$data_pesan = $this->home_model->get_pesan($id);
		$data = array(	'title'		=> 'Print Invoice',
						'data_pesan' => $data_pesan,
					);
		$this->load->view('home/print_invoice', $data, FALSE);
	}
}