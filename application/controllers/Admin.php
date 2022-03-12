<?php

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//$this->simple_login->cek_login();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data = array('title' => 'Dashboard Admin',
                        'isi' => 'admin/dashboard' );
        $this->load->view('admin/layout/wrapper',$data, FALSE);
	}
	public function game(){
		$data_game = $this->admin_model->data_game();
		$data = array('title' => 'Data Game',
						'data_game' => $data_game,
                        'isi' => 'admin/data_game' );
        $this->load->view('admin/layout/wrapper',$data, FALSE);
	}
	public function add_game(){
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('proses', 'proses', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');

		$nama = $this->input->post('nama');
		$proses = $this->input->post('proses');
		$keterangan = $this->input->post('keterangan');
		$status = $this->input->post('status');

		$config['upload_path']="./template/image";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);

		if ($this->form_validation->run() == FALSE) {
			echo json_encode('error');
		}else{
			if($this->upload->do_upload("gambar")){
	            $upload_data = array('upload_data' => $this->upload->data());
	 
	            $image= $upload_data['upload_data']['file_name']; 

				$data = array('nama_game' => $nama,
								'proses' => $proses,
								'keterangan' => $keterangan,
								'status' => $status,
								'gambar' => $image
				 );

				$this->admin_model->add_game($data);
				echo json_encode('sukses');
			}else{
				echo json_encode("error");
			}
		}
	}

	public function get_game(){
		$id = $this->input->post('id');
		$data_game = $this->admin_model->get_game($id);
		echo json_encode($data_game);
	}

	public function edit_game(){
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('proses', 'proses', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');

		$id_game = $this->input->post('id');
		$nama = $this->input->post('nama');
		$proses = $this->input->post('proses');
		$keterangan = $this->input->post('keterangan');
		$status = $this->input->post('status');

		if ($this->form_validation->run() == FALSE) {
			echo json_encode('error');
		}else{
			$data = array('nama_game' => $nama,
							'id_game' => $id_game,
							'proses' => $proses,
							'keterangan' => $keterangan,
							'status' => $status,
			 );

			$this->admin_model->edit_game($data);
			echo json_encode('sukses');
		}
	}
	// ======================== paket ======================
	public function paket(){
		$data_paket = $this->admin_model->data_paket();
		$data_game = $this->admin_model->data_game();
		$data = array('title' => 'Data Paket Game',
						'data_paket' => $data_paket,
						'data_game' => $data_game,
                        'isi' => 'admin/data_paket' );
        $this->load->view('admin/layout/wrapper',$data, FALSE);
	}

	public function add_paket(){
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('id_game', 'id_game', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');

		$nama = $this->input->post('nama');
		$id_game = $this->input->post('id_game');
		$harga = $this->input->post('harga');

		if ($this->form_validation->run() == FALSE) {
			echo json_encode('error');
		}else{
			$data = array('nama_paket' => $nama,
							'harga' => $harga,
							'id_game' => $id_game,
			 );

			$this->admin_model->add_paket($data);
			echo json_encode('sukses');
		}
	}
	public function get_paket(){
		$id = $this->input->post('id');
		$data_paket = $this->admin_model->get_paket($id);
		echo json_encode($data_paket);
	}
	public function edit_paket(){
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('id_game', 'id_game', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$id_game = $this->input->post('id_game');
		$harga = $this->input->post('harga');

		if ($this->form_validation->run() == FALSE) {
			echo json_encode('error');
		}else{
			$data = array('nama_paket' => $nama,
							'harga' => $harga,
							'id_game' => $id_game,
							'id_paket'	=>$id
			 );

			$this->admin_model->edit_paket($data);
			echo json_encode('sukses');
		}
	}
	public function del_paket($id){
		$this->admin_model->del_paket($id);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/paket'), 'refresh');
	}
	// ======================== Rekening ======================
	public function rekening(){
		$rekening = $this->admin_model->rekening();
		$data = array('title' => 'Data Rekening',
						'rekening' => $rekening,
                        'isi' => 'admin/data_rekening' );
        $this->load->view('admin/layout/wrapper',$data, FALSE);
	}
	public function get_rekening(){
		$id = $this->input->post('id');
		$data_rekening = $this->admin_model->get_rekening($id);
		echo json_encode($data_rekening);
	}
	public function edit_rekening(){
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('atas_nama', 'atas_nama', 'required');
		$this->form_validation->set_rules('no_rek', 'no_rek', 'required');

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$atas_nama = $this->input->post('atas_nama');
		$no_rek = $this->input->post('no_rek');

		if ($this->form_validation->run() == FALSE) {
			echo json_encode('error');
		}else{
			$data = array('nama' => $nama,
							'atas_nama' => $atas_nama,
							'no_rekening' => $no_rek,
							'id_rekening'	=>$id
			 );

			$this->admin_model->edit_rekening($data);
			echo json_encode('sukses');
		}
	}

}