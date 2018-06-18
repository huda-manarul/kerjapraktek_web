<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('admin');
	}

	public function index()
	{
		
		if($this->admin->logged_id()){
			if ($session_data['level']==0) {
				redirect('dashboard');
			}
			else{
				redirect('mahasiswa');
			}
		}
		else{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
				<div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

	            //cek validasi
			if ($this->form_validation->run() == TRUE) {
				$username = $this->input->post("username", TRUE);
				$password = $this->input->post('password', TRUE);
				
	            //checking data
				$checking = $this->admin->check_login('tbl_users', array('username' => $username), array('password' => $password));
				
	            //jika ditemukan, maka create session
				if ($checking != FALSE) {
					foreach ($checking as $apps) {

						$session_data = array(
							'user_id'   => $apps->id_user,
							'user_name' => $apps->username,
							'user_pass' => $apps->password,
							'user_nama' => $apps->nama_user,
							'level' => $apps->level
						);
	                    //set session userdata
						$this->session->set_userdata($session_data);

						if ($session_data['level']=='0') {
							redirect('dashboard');
						}
						else{
							redirect('mahasiswa');
						}

					}
				}else{

					$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
					<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
					$this->load->view('login', $data);
				}

			}else{

				$this->load->view('login');
			}

		}

	}
}
