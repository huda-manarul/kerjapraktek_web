<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->library('upload');
		$this->load->library('pagination');
		$this->load->model('admin');
		$this->load->helper('url');
		$this->load->view("layout/mahasiswa_header");			
	}

	public function index()
	{
		if($this->admin->logged_id())
		{	
			$nim = $this->session->userdata("user_name");
			$data['judul'] = "Data Mahasiswa";
			$data['user'] = $this->admin->GetalldataMhs($nim)->result();
			$this->load->view('mahasiswa/datamahasiswa',$data);		

		}else{
			redirect('pendaftaran');

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pendaftaran');
	}


	public function informasi(){
		$jumlah_data = $this->admin->Getcountinfo('tbl_informasi');
		$config['base_url'] = base_url().'mahasiswa/informasi';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;

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
		$this->load->view('mahasiswa/daftarberita',$data);
	}

	public function pertanyaan(){
		$jumlah_data = $this->admin->Getcountinfo('tbl_diskusi');
		$config['base_url'] = base_url().'mahasiswa/pertanyaan';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;

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
		$data['judul'] = "pertanyaan";
		$data['user'] = $this->admin->Getdatainfo('tbl_diskusi',$config['per_page'],$from);
		$this->load->view('mahasiswa/pertanyaan',$data);
	}

	public function inputDosbing(){
		$data['judul'] = "Halaman Input dosbing";
		$nim = $this->session->userdata("user_name");
		$where = array(
			'nim' => $nim
		);
		$data['info'] = $this->admin->Editdatainfo($where,'tbl_mahasiswa_dosbing')->result();
		$data['user'] = $this->admin->GetdataDosen()->result();
		$this->load->view('pendaftaran/dosbing',$data);


	}

	public function prosesinputdosbing(){
		$nim = $this->input->post('nim');
		$nip = $this->input->post('nip');
		$data = array(
			'nim' => $nim,
			'nip' => $nip
		);
		$this->admin->Insertdatainfo($data,'tbl_mahasiswa_dosbing');
		redirect(base_url().'mahasiswa','refresh');

	}

	public function daftarSidangKP(){
		$data['judul'] = "Halaman Pendaftaran Sidang KP";
		$nim = $this->session->userdata("user_name");
		$where = array(
			'nim' => $nim
		);
		$data['info'] = $this->admin->Editdatainfo($where,'tbl_mahasiswa_sidang')->result();
		$this->load->view('pendaftaran/sidang',$data);

	}

	public function tambahpertanyaan(){
		$pertanyaan = $this->input->post('pertanyaan');
		$data = array(
			'pertanyaan' => $pertanyaan
		);
		$this->admin->Insertdatainfo($data,'tbl_diskusi');
		redirect(base_url().'mahasiswa/pertanyaan','refresh');
	}


	public function prosesdaftarsidangKP(){

		$nim = $this->input->post('nim');
		$judul = $this->input->post('judul');

		$config['upload_path'] = './assets/images/'; 
		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
		$config['encrypt_name'] = FALSE; 

		$this->upload->initialize($config);

		$this->upload->do_upload('sk');
		$sk = $this->upload->data();
		$ketmagang=$sk['file_name'];

		$this->upload->do_upload('pengesahan');
		$pengesahan = $this->upload->data();
		$sah=$pengesahan['file_name'];

		$data = array(
			'nim' => $nim,
			'judul_kp' => $judul,
			'lembar_pengesahan' => $sah,
			'surat_magang' => $ketmagang
		);
		$this->admin->Insertdatainfo($data,'tbl_mahasiswa_sidang');
		redirect(base_url().'mahasiswa','refresh');
	}

}
