<?php 
/**
 * 
 */
class Home_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function detail($id){
		$this->db->select('*');
		$this->db->from('tb_game');
		$this->db->where('id_game',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function get_paket($id){
		$this->db->select('*');
		$this->db->from('tb_paket');
		$this->db->where('id_game',$id);
		$query = $this->db->get();
		return $query->result();
	}
	public function pesan($data){
		$this->db->insert('tb_pesan', $data);
		$insert_id = $this->db->insert_id();

   		return $insert_id;
	}
	public function get_pesan($id){
		$this->db->select('tb_pesan.*, tb_paket.nama_paket, tb_paket.harga, tb_rekening.atas_nama, tb_rekening.no_rekening');
		$this->db->from('tb_pesan');
		$this->db->join('tb_paket','tb_paket.id_paket = tb_pesan.id_paket', 'left');
		$this->db->join('tb_rekening','tb_rekening.id_rekening = tb_pesan.rekening', 'left');
		$this->db->where('tb_pesan.id_transaksi',$id);
		$query = $this->db->get();
		return $query->row();
	}
}