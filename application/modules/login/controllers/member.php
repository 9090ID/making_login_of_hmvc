<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Member extends CI_Controller
{
	public function __construct() 
{
	parent::__construct();
	if ($this->session->userdata('username')=="") 
{
			redirect('login');
		}	
		elseif($this->session->userdata('level') == 'admin')
		{
			redirect('admin/admin');
		}
	}
//Prosess Operator	
	public function index() {
		$data = array('error' => '','username' => $this->session->userdata('username'));
		$this->load->view('member', $data);
	}
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}