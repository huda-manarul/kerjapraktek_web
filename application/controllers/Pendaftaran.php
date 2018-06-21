<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
		$this->load->view('layout/main_header');
	}

	public function index()
	{
		
		if($this->admin->logged_id()){
			redirect('login');
		}
		else{
			$this->load->view('pendaftaran/content');

		}

	}

	public function daftarKP(){
		$data['judul'] = "Halaman pendaftaran kerja praktek";
		$this->load->view('pendaftaran/daftar',$data);
	}


	public function prosesdaftarkp(){
		$jenis = $this->input->post('jenis');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$tempat = $this->input->post('tempat');
		$alamat = $this->input->post('alamat');
		$penyelia = $this->input->post('penyelia');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jenis_kegiatan' => $jenis,
			'tempat_kp' => $tempat,
			'alamat_tempat_kp' => $alamat,
			'penyelia' => $penyelia
		);

		$data1 = array(
			'nama_user' => $nama,
			'username' => $nim,
			'password' => 'a',
			'level' => 1
		);

		$this->admin->InsertdataKP($data,'tbl_mahasiswa_kp');
		$this->admin->InsertdataKP($data1,'tbl_users');
		redirect(base_url(),'refresh');

	}
}
