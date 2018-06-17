<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
		$this->load->view('layout/admin_header');			
	}

	public function index()
	{
		if($this->admin->logged_id())
		{
			$data['judul'] = "Daftar Mahasiswa kerja praktek";
			$data['user'] = $this->admin->GetdataMhs()->result();
			$this->load->view('admin/datamahasiswa',$data);

		}else{
			redirect('pendaftaran');
		}
	}



	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pendaftaran');
	}

	public function datadosen(){
		$data['judul'] = "Daftar Dosen Pembimbing kerja praktek";
		$data['user'] = $this->admin->GetdataDosenAll()->result();
		$this->load->view('admin/datadosen',$data);
	}

	public function datasidang(){
		$data['judul'] = "Data Sidang Mahasiswa kerja praktek";
		$data['user'] = $this->admin->Getdatasidang()->result();
		$this->load->view('admin/datasidang',$data);
	}

	public function tambahberita(){
		$this->load->view('admin/postinfo');
	}

	public function prosestamabahinformasi(){
		$judul = $this->input->post('judul');
		$berita = $this->input->post('berita');
		$data = array(
			'judul_berita' => $judul,
			'isi_berita' => $berita
		);
		$this->admin->Insertdatainfo($data,'tbl_informasi');
		redirect(base_url().'dashboard','refresh');
	}

}
