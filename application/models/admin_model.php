<?php 
/**
 * 
 */
class Admin_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	// function game
	public function data_game(){
		$this->db->select('*');
		$this->db->from('tb_game');
		$this->db->order_by('nama_game','asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function add_game($data){
		$this->db->insert('tb_game', $data);
	}
	public function get_game($id){
		$this->db->select('*');
		$this->db->from('tb_game');
		$this->db->where('id_game',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function edit_game($data){
		$this->db->where('id_game', $data['id_game']);
		$this->db->update('tb_game',$data);
	}

	// function paket game
	public function data_paket(){
		$this->db->select('tb_paket.*,tb_game.nama_game, tb_game.proses');
		$this->db->from('tb_paket');
		$this->db->join('tb_game','tb_game.id_game = tb_paket.id_game', 'left');
		$this->db->order_by('nama_paket','asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function add_paket($data){
		$this->db->insert('tb_paket', $data);
	}
	public function get_paket($id){
		$this->db->select('*');
		$this->db->from('tb_paket');
		$this->db->where('id_paket',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function edit_paket($data){
		$this->db->where('id_paket', $data['id_paket']);
		$this->db->update('tb_paket',$data);
	}
	public function del_paket($id){
		$this->db->where('id_paket', $id);
		$this->db->delete('tb_paket');
	}

	// function paket game
	public function rekening(){
		$this->db->select('*');
		$this->db->from('tb_rekening');
		$this->db->order_by('id_rekening','asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_rekening($id){
		$this->db->select('*');
		$this->db->from('tb_rekening');
		$this->db->where('id_rekening',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function edit_rekening($data){
		$this->db->where('id_rekening', $data['id_rekening']);
		$this->db->update('tb_rekening',$data);
	}

	// transaksi
	public function data_pesan(){
		$this->db->select('tb_pesan.*,tb_paket.nama_paket, tb_game.nama_game, tb_rekening.nama');
		$this->db->from('tb_pesan');
		$this->db->join('tb_paket','tb_paket.id_paket = tb_pesan.id_paket', 'left');
		$this->db->join('tb_game','tb_game.id_game = tb_pesan.id_game', 'left');
		$this->db->join('tb_rekening','tb_rekening.id_rekening = tb_pesan.rekening', 'left');
		$this->db->order_by('tb_pesan.status','desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_pesan($id){
		$this->db->select('tb_pesan.*,tb_rekening.nama');
		$this->db->from('tb_pesan');
		$this->db->join('tb_rekening','tb_rekening.id_rekening = tb_pesan.rekening', 'left');
		$this->db->where('id_transaksi',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function konfirmasi($data){
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('tb_pesan',$data);
	}
}