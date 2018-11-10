<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}
	
	public function index()
	{
		$this->load->view('v_login');
	}
	public function cek_login() {

		$data = array('nik' => $this->input->post('username', TRUE),
					  'password' => $this->input->post('password', TRUE),
		);
		$hasil = $this->M_login->cek_user($data);
		$status = $this->M_login->cek_user($data)->row_array()['verifikasi'];
		
		if ($hasil->num_rows() > 0 && $status == 1) {
			
			foreach ($hasil->result() as $sess) {
				$sess_data['nama'] = $sess->username;
				$sess_data['username'] = $sess->nik;
				$sess_data['status'] = $sess->status;
			}
			$this->session->set_userdata($sess_data);
			
			if ($this->session->userdata('status')=='Admin') {
				redirect('/admin/Home','refresh');
			}
			else if ($this->session->userdata('status')=='Kepala') {
				redirect('/kepala/C_kepala','refresh');
			}else if ($this->session->userdata('status')=='User') {
				redirect('/user/C_user','refresh');
			}
	
		}else {
			$this->session->set_flashdata('gagal_login','
			 	<p class="text-danger text-center" >
			 		Password Atau User name Salah, atau akun anda belum diverifikasi
			 	</p>
			 	');
			redirect('C_login');
		}
	}

	public function daftar(){
		if($this->input->post()){
			$data['nik'] = $this->input->post('nik',TRUE);
			$data['username'] = $this->input->post('nama',TRUE);
			$data['password'] = $this->input->post('password',TRUE);
			$data['status'] = "User";
			$data['tanggal_daftar'] = date("Y-m-d");
			$data['verifikasi'] = 0;			
			$cek = $this->M_login->cek_nik_ada($data['nik']);
			if($cek==0){
				$daftarkan = $this->M_login->daftar($data);
				$this->session->set_flashdata('msg', 'true');

			}else{
				$this->session->set_flashdata('msg', 'false');
			}
			redirect('C_login/daftar');
		}else{
			$this->load->view('v_daftar');
		}
	}

	public function laporan_pdf(){

	    $data = array(
	        "dataku" => array(
	            "nama" => "Petani Kode",
	            "url" => "http://petanikode.com"
	        )
	    );

	    $this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "laporan-petanikode.pdf";
	    $this->pdf->load_view('laporan/akte', $data);


	}


	public function logout (){
		$this->session->unset_userdata('status');
		session_destroy();
		redirect(base_url());
	}
}