<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_model {

	public function cek_user($data) {
			return $this->db->get_where('user', $data);
	}

	public function daftar($data){
		$query = $this->db->insert('user', $data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function cek_nik_ada($nik){
        $this->db->where('nik',$nik);
        $log = $this->db->get('user');
        return $log->num_rows();   
    }
}