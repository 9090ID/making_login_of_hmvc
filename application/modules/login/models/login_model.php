<?php 
class Login_model extends CI_Model{
	public function __construct(){
	parent::__construct();	
	}
	public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}
}