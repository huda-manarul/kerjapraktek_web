<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
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

	public function databerita(){
		$jumlah_data = $this->admin->Getcountinfo('tbl_informasi');
		$config['base_url'] = base_url().'dashboard/databerita';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;

		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['judul'] = "Informasi";
		$data['user'] = $this->admin->Getdatainfo('tbl_informasi',$config['per_page'],$from);

		$data['judul'] = "Daftar Informasi KP";
		$this->load->view('admin/databerita',$data);
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
