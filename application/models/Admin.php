<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
    }

	//fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }


    public function InsertdataKP($data,$table){
        $this->db->insert($table,$data);
    }

    public function GetdataDosenAll(){

        return $this->db->get('tbl_dosen');
    }

    public function Getdatauser($where,$table){     
        return $this->db->get_where($table,$where);
    }

    public function GetdataDosen(){

        $this->db->select('*');
        $this->db->from('tbl_dosen');
        $this->db->where('sisa_kuota != ',0);
        return $this->db->get();
    }


    public function Insertdatadosbing($data,$table){
        $this->db->insert($table,$data);
    }
    
    public function Insertdatasidang($data,$table){
        $this->db->insert($table,$data);
    }
    
    public function Getdatasidang(){
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa_dosbing');
        $this->db->join('tbl_dosen', 'tbl_dosen.nip = tbl_mahasiswa_dosbing.nip');
        $this->db->join('tbl_mahasiswa_kp', 'tbl_mahasiswa_kp.nim = tbl_mahasiswa_dosbing.nim');
        $this->db->join('tbl_mahasiswa_sidang', 'tbl_mahasiswa_sidang.nim = tbl_mahasiswa_dosbing.nim');
        return $this->db->get();
    }

    public function Insertdatainfo($data,$table){
        $this->db->insert($table,$data);
    }

    public function GetdataMhs(){
        return $this->db->get('tbl_mahasiswa_kp');
    }

    public function GetalldataMhs($nim){
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa_dosbing');
        $this->db->join('tbl_dosen', 'tbl_dosen.nip = tbl_mahasiswa_dosbing.nip');
        $this->db->join('tbl_mahasiswa_kp', 'tbl_mahasiswa_kp.nim = tbl_mahasiswa_dosbing.nim');
        $this->db->join('tbl_mahasiswa_sidang', 'tbl_mahasiswa_sidang.nim = tbl_mahasiswa_dosbing.nim');
        $this->db->where('tbl_mahasiswa_kp.nim',$nim);
        return $this->db->get();
    }


    public function Insertpertanyaan($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_data($where,$table){       
        return $this->db->get_where($table,$where);
    }


    function Getdatainfo($table,$number,$offset){
        return $query = $this->db->get($table,$number,$offset)->result();       
    }

    function Getcountinfo($table){
        return $this->db->get($table)->num_rows();
    }

}