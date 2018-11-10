<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');


class C_kepala extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('M_login');
		$this->load->model('admin/M_admin');
	}
	function index() {
	$this->load->view('kepala/v_home_kepala');	
	}
    function laporan_ksk(){
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_laporan_ksk();
        $this->load->view('kepala/data_laporan/ksk/laporan_ksk', ['temp' => $temp]);
    }
     function export_laporan_ksk(){
        $this->load->model('M_admin');
        $temp= $this->M_admin->data_laporan_ksk();
        $this->load->view('kepala/data_laporan/ksk/export_laporan_ksk',['temp' => $temp]);
    }
     function laporan_sp(){
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_laporan_sp();
        $this->load->view('kepala/data_laporan/sp/laporan_sp', ['temp' => $temp]);
    }
     function export_laporan_sp(){
        $this->load->model('M_admin');
        $temp= $this->M_admin->data_laporan_sp();
        $this->load->view('kepala/data_laporan/sp/export_laporan_sp',['temp' => $temp]);
    }
     function laporan_akte(){
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_laporan_akte();
        $this->load->view('kepala/data_laporan/akte/laporan_akte', ['temp' => $temp]);
    }
     function export_laporan_akte(){
        $this->load->model('M_admin');
        $temp= $this->M_admin->data_laporan_akte();
        $this->load->view('kepala/data_laporan/akte/export_laporan_akte',['temp' => $temp]);
    }
    function laporan_ktp(){
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_laporan_ktp();
        $this->load->view('kepala/data_laporan/ktp/laporan_ktp', ['temp' => $temp]);
    }
     function export_laporan_ktp(){
        $this->load->model('M_admin');
        $temp= $this->M_admin->data_laporan_ktp();
        $this->load->view('kepala/data_laporan/ktp/export_laporan_ktp',['temp' => $temp]);
    }
    function info_view() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_kepala($this->session->userdata('username'));
        $this->load->view('kepala/informasi/v_info', ['temp' => $temp]);
    }
    function user_edit($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_kepala($this->session->userdata('username'));
        $this->load->view('kepala/informasi/user_edit', ['temp' => $temp]);
    }
    function simpan_user() {
        $nik = $this->input->post('nik');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $status = $this->input->post('status');
        $data = array(
            'nik' => $nik,
            'username' => $username,
            'password' => $password,
            'status' => $status
        );
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_simpan_user($data, $nik);
        $temp = $this->M_admin->data_kepala($this->session->userdata('username'));
        $this->load->view('kepala/informasi/v_info', ['temp' => $temp]);
    }

    function about_view($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_view_informasi($id);
        $this->load->view('kepala/about/v_lihat_about', ['temp' => $temp]);
    }
    function about()
    {
        $data['about'] = $this->M_admin->get_info();
       $this->load->view('kepala/about/about',$data); 
    }



    function ubah_sandi_kepala(){
        if($this->input->post()){
            $passwordlama = $this->input->post('passwordlama');
            $data = array('nik' => "kepala");
            $password = $this->M_login->cek_user($data)->row_array()['password'];
            if($passwordlama == $password){
               $data = array(
                    'password' => $this->input->post('passwordbaru')
                );
                $temp = $this->M_admin->adm_simpan_user($data, "kepala");
                $this->session->set_flashdata('msg', 'true');
            }else{
                $this->session->set_flashdata('msg', 'false');
            }
        }
        $this->load->view('user/v_ubah_sandi.php');
    }

}
 ?>