<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_nama');
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

    public function GetdataDosen(){

        $this->db->select('*');
        $this->db->from('tbl_dosen');
        $this->db->where('sisa_kuota != ',0);
        return $this->db->get();
    }

    
    public function Getdatasidang(){
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa_dosbing');
        $this->db->join('tbl_dosen', 'tbl_dosen.nip = tbl_mahasiswa_dosbing.nip');
        $this->db->join('tbl_mahasiswa_kp', 'tbl_mahasiswa_kp.nim = tbl_mahasiswa_dosbing.nim');
        $this->db->join('tbl_mahasiswa_sidang', 'tbl_mahasiswa_sidang.nim = tbl_mahasiswa_dosbing.nim');
        return $this->db->get();
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


    public function Insertdatainfo($data,$table){
        $this->db->insert($table,$data);
    }

    public function Editdatainfo($where,$table){       
        return $this->db->get_where($table,$where);
    }

    function jawab($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    } 

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }  

    function Getdatainfo($table,$number,$offset){
        return $query = $this->db->get($table,$number,$offset)->result();       
    }

    function Getcountinfo($table){
        return $this->db->get($table)->num_rows();
    }

}