<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function validateUser($data){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('ir_id', $data['username']);
		$this->db->where('password', md5($data['password']));
		$query = $this->db->get();
		return $query->result();
	}

	public function getContactsCount($irid){
		$this->db->where('ir_id', $irid);
		$this->db->from('contacts');
		return $this->db->count_all_results();
	}

	public function getAllContacts($irid){
		$this->db->select('*');
		$this->db->where('ir_id', $irid);
		$this->db->from('contacts');
		$query = $this->db->get();
		return $query->result();
	}

	public function getPlansCount($irid){
		$this->db->where('ir_id', $irid);
		$this->db->from('myplans');
		return $this->db->count_all_results();	
	}

	public function insertNewUser($data){
		$query = $this->db->insert('users', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
}

/* End of file user_model.php */
/* Location: ./application/controllers/user_model.php */