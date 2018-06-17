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
			if ($session_data['level']==0) {
				redirect('dashboard');
			}
			else{
				redirect('mahasiswa');
			}
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
		$this->admin->InsertdataKP($data,'data_mahasiswa_kp');
		redirect(base_url(),'refresh');

	}
}
