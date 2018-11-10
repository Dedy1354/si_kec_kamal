<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_public extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_admin');
	}
	public function p_akte()
	{
		$this->load->view('public/permohonan_akte');
	}
	function tambah_akte() {
        $tgl = $this->input->post('tgl');
        $ayah = $this->input->post('ayah');
        $ibu = $this->input->post('ibu');
        $alamat = $this->input->post('alamat');
        $anak = $this->input->post('anak');
        $tmp = $this->input->post('tmp');
        $tgl_l = $this->input->post('tgl_l');
        $pot = $this->input->post('pot');
        $anak_k = $this->input->post('anak_k');
        $data = array(
            'tgl' => $tgl,
            'nama_ayah' => $ayah,
            'nama_ibu' => $ibu,
            'alamat' => $alamat,
            'nama_anak' => $anak,
            'tempat_lahir' => $tmp,
            'tgl_lahir' => $tgl_l,
            'pekerjaan_ortu' => $pot,
            'anak_ke' => $anak_k
        );
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_tambah_akte($data);
        $temp = $this->M_admin->data_akte();
        $this->load->view('public/v_konfirmasi', ['temp' => $temp]);
    }
	public function p_ktp()
	{	
		$data['desa'] = $this->M_admin->data_desa();
		$this->load->view('public/permohonan_ktp',$data);
	}
	 function tambah_ktp() {
        $tgl = $this->input->post('tgl');
        $pemohon = $this->input->post('pemohon');
        $desa = $this->input->post('desa');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nik = $this->input->post('nik');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_l = $this->input->post('tgl_l');
        $status = $this->input->post('status');
        $ket = $this->input->post('ket');
        $data = array(
            'tgl' => $tgl,
            'pemohon' => $pemohon,
            'desa' => $desa,
            'nama' => $nama,
            'alamat' => $alamat,
            'nik' => $nik,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_l,
            'status' => $status,
            'ket' => $ket
        );
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_tambah_ktp($data);
        $this->load->view('public/v_konfirmasi', ['temp' => $temp]);
    }
	public function p_ksk()
	{
		$data['desa'] = $this->M_admin->data_desa();
		$this->load->view('public/permohonan_ksk',$data);
	}
	function ksk() {
        if (isset($_POST['tambah'])) {
            $pemohon = $this->input->post('pemohon');
            $alamat = $this->input->post('alamat');
            $nama = $this->input->post('nama');
            $alaml = $this->input->post('alaml');
            $tgl = $this->input->post('tgl');
            $data = array('pemohon' => $pemohon, 'alamat_desa' => $alamat, 'nama_ksk' => $nama, 'alamat_lengkap' => $alaml, 'tgl' => $tgl);
            $this->load->model('M_admin');
            $temp = $this->M_admin->adm_tambah_ksk($data);

            $temp = $this->M_admin->data_adm();
            $this->load->view('public/v_konfirmasi', ['temp' => $temp]);
        } elseif (isset($_POST['kskadd'])) {
            $data['desa'] = $this->M_admin->data_desa();
            $this->load->view('admin/data_administrasi/ksk/ksk_tambah', $data);
        } else {
            $this->load->model('M_admin');
            $temp = $this->M_admin->data_adm();
            $this->load->view('public/v_konfirmasik', ['temp' => $temp]);
        }
    }
	public function p_sp()
	{
		$this->load->view('public/permohonan_sp');
	}
	function surat_pindah() {
        if (isset($_POST['spadd'])) {
            $this->load->view('admin/data_administrasi/sp/sp_tambah');
        } elseif (isset($_POST['tambah'])) {
            $nama = $this->input->post('nama');
            $tempat = $this->input->post('tempat');
            $tgl = $this->input->post('tgl');
            $alamat = $this->input->post('alamat');
            $np = $this->input->post('np');
            $jp = $this->input->post('jp');
            $almp = $this->input->post('almp');
            $alasan = $this->input->post('alasan');
            $tgl_p = $this->input->post('tgl_p');
            $ket = $this->input->post('ket');
            $data = array('nama' => $nama,
                'tempat_lahir' => $tempat,
                'tgl_lahir' => $tgl,
                'alamat' => $alamat,
                'no_pengantar' => $np,
                'jumlah_pengikut' => $jp,
                'alamat_pindah' => $almp,
                'alasan_pindah' => $alasan,
                'tgl_pindah' => $tgl_p,
                'foto' => $ket
            );
            $this->load->model('M_admin');
            $temp = $this->M_admin->adm_simpan_sp($data);
            $temp = $this->M_admin->data_sp();
            $this->load->view('public/v_konfirmasi', ['temp' => $temp]);
        }
    }
}

 ?>