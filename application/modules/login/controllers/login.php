<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
*
* Process To Login Multi User
*/
class Login extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//load Login_model.php	
			$this->load->model('login_model');
		//check the username is already set up or not
				/*if ($this->session->userdata('username')) 
				{
			//if username is already set up, then check the level of username is admin or member
					if($this->session->userdata('level') == 'admin')
					{
					$this->session->set_flashdata('result','You Successfully Login as Admin'); 
					redirect('login/admin');
					}				
							elseif($this->session->userdata('level') == 'member')
					{
					$this->session->set_flashdata('result','You Successfully Login as Member'); 
					redirect('login/member');
					}
					else {
					$this->session->set_flashdata('result','SORRY, USERNAME AND PASSWORD INNCORRET'); 
					redirect('login/');   
				}
				}*/
	}
//Start For Login
	public function index()
	{
		$data = array('error' => '');
		$this->load->view('form_login', $data);
	}

	//function for processing login form
	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		//$this->load->model('model_user'); // load model_user
		$hasil = $this->login_model->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') 
			{
				$this->session->set_flashdata('message', 'You Succesfully Login as Admin');
				redirect('login/admin');
			}
			elseif
			 ($this->session->userdata('level')=='member') 
			{
				$this->session->set_flashdata('message', 'You Succesfully Login as Member');
				redirect('login/member');
			}		
			}
			else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
	}

	/*public function register(){
		$data = array('error' => '');
	$this->load->view('form_register', $data);
	}*/
