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
		//$this->db->join('tb_game','tb_game.id_game = tb_paket.id_game', 'left');
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
}