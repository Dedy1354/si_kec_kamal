<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');


class C_admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_admin');
	}
	//---------------------penduduk------------------------------------------------------//
	function data_penduduk()
	{
		$temp = $this->M_admin->get_data_dps();
		$this->load->view('admin/data_penduduk/v_penduduk',['temp'=> $temp]);
	}
	//-----------------------arsip------------------------------------------------------//
	function data_arsip() {
        $this->load->view('admin/data_arsip/v_arsip');
    }
     function data_arsip_v(){
        $this->load->view('admin/data_arsip/v_arsip_ksk');
    }
    //--------------------catatan sipil-------------------------------------------------//
    function data_catatan_sipil() {
        $temp = $this->M_admin->data_sipil();
        $this->load->view('admin/data_catatan_sipil/v_catatan_sipil', ['temp' => $temp]);
    }
    function sipil_dps() {
        if (isset($_POST['sipiladd'])) {
            $this->load->view('admin/data_catatan_sipil/sipil_tambah');
        } elseif (isset($_POST['tambah'])) {
            $desa = $this->input->post('desa');
            $data = array('desa' => $desa);
            $this->load->model('M_admin');
            $temp = $this->M_admin->tambah_sipil($data);
            $temp = $this->M_admin->data_sipil();
            $this->load->view('admin/data_catatan_sipil/v_catatan_sipil', ['temp' => $temp]);
        } else if (isset($_POST['simpan'])) {
            $desa = $this->input->post('desa');
            $no = $this->input->post('no');
            $data = array('desa' => $desa);
            $this->load->model('M_admin');
            $temp = $this->M_admin->simpan_sipil($data, $no);
            $temp = $this->M_admin->data_sipil();
            $this->load->view('admin/data_catatan_sipil/v_catatan_sipil', ['temp' => $temp]);
        } else {
            $this->load->model('M_admin');
            $temp = $this->M_admin->data_sipil();
            $this->load->view('admin/data_catatan_sipil/v_catatan_sipil', ['temp' => $temp]);
        }
    }
    function sipil_dps_s($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->sipil_dps_e($id);
        $this->load->view('admin/data_catatan_sipil/sipil_edit', ['temp' => $temp]);
    }
     function sipil_dps_h($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->sipil_dps_h($id);
        $temp = $this->M_admin->data_sipil();
        $this->load->view('admin/data_catatan_sipil/v_catatan_sipil', ['temp' => $temp]);
    }
    function tabel_dps($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_dps($id);
        echo $id;
        $this->load->view('admin/data_catatan_sipil/dps/tabel_dps', ['desa' => $id, 'temp' => $temp]);
    }
    function dps_tambah() {
        $desa = $this->input->post('desa');
        $this->load->view('admin/data_catatan_sipil/dps/dps_tambah', ['desa' => $desa]);
    }
    function tambah_dps() {
        if (isset($_POST['tambah'])) {
            $desa = $this->input->post('desa');
            $bulan = $this->input->post('bulan');
            $awall = $this->input->post('awall');
            $awalp = $this->input->post('awalp');
            $lahirl = $this->input->post('lahirl');
            $lahirp = $this->input->post('lahirp');
            $matil = $this->input->post('matil');
            $matip = $this->input->post('matip');
            $datangl = $this->input->post('datangl');
            $datangp = $this->input->post('datangp');
            $pergil = $this->input->post('pergil');
            $pergip = $this->input->post('pergip');
            $jumlahl = $awall + $lahirl - $matil + $datangl - $pergil;
            $jumlahp = $awalp + $lahirp - $matip + $datangp - $pergip;
            $total = $jumlahl + $jumlahp;
            $data = array(
                'desa' => $desa,
                'bulan' => $bulan,
                'awal_l' => $awall,
                'awal_p' => $awalp,
                'lahir_l' => $lahirl,
                'lahir_p' => $lahirp,
                'mati_l' => $matil,
                'mati_p' => $matip,
                'datang_l' => $datangl,
                'datang_p' => $datangp,
                'pergi_l' => $pergil,
                'pergi_p' => $pergip,
                'jumlah_l' => $jumlahl,
                'jumlah_p' => $jumlahp,
                'total' => $total);
            $this->load->model('M_admin');
            $temp = $this->M_admin->adm_tambah_dps($data);
            $temp = $this->M_admin->data_sipil();
            $this->load->view('admin/data_catatan_sipil/v_catatan_sipil', ['temp' => $temp]);
        } elseif (isset($_POST['simpan'])) {
            $no = $this->input->post('no');
            $bulan = $this->input->post('bulan');
            $awall = $this->input->post('awall');
            $awalp = $this->input->post('awalp');
            $lahirl = $this->input->post('lahirl');
            $lahirp = $this->input->post('lahirp');
            $matil = $this->input->post('matil');
            $matip = $this->input->post('matip');
            $datangl = $this->input->post('datangl');
            $datangp = $this->input->post('datangp');
            $pergil = $this->input->post('pergil');
            $pergip = $this->input->post('pergip');
            $jumlahl = $awall + $lahirl - $matil + $datangl - $pergil;
            $jumlahp = $awalp + $lahirp - $matip + $datangp - $pergip;
            $total = $jumlahl + $jumlahp;
            $data = array(
                'bulan' => $bulan,
                'awal_l' => $awall,
                'awal_p' => $awalp,
                'lahir_l' => $lahirl,
                'lahir_p' => $lahirp,
                'mati_l' => $matil,
                'mati_p' => $matip,
                'datang_l' => $datangl,
                'datang_p' => $datangp,
                'pergi_l' => $pergil,
                'pergi_p' => $pergip,
                'jumlah_l' => $jumlahl,
                'jumlah_p' => $jumlahp,
                'total' => $total);
            $this->load->model('M_admin');
            $temp = $this->M_admin->adm_simpan_dps($data, $no);
            $temp = $this->M_admin->data_sipil();
            $this->load->view('admin/data_catatan_sipil/v_catatan_sipil', ['temp' => $temp]);
        } else {
            $this->load->model('M_admin');
            $temp = $this->M_admin->data_sipil();
            $this->load->view('admin/data_catatan_sipil/v_catatan_sipil', ['temp' => $temp]);
        }
    }
    function dps_edit($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_edit_dps($id);
        $this->load->view('admin/data_catatan_sipil/dps/dps_edit', ['temp' => $temp]);
    }
     function dps_hapus($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_dps($id);
        $temp = $this->M_admin->data_sipil();
        $this->load->view('admin/data_catatan_sipil/v_catatan_sipil', ['temp' => $temp]);
    }
    //-----------------------------administrasi----------------------------//
    function data_administrasi() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_adm();
        $this->load->view('admin/data_administrasi/v_administrasi', ['temp' => $temp]);
    }
    //ksk
    function tabel_ksk() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_adm();
        $this->load->view('admin/data_administrasi/ksk/tabel_ksk', ['temp' => $temp]);
    }
    function ksk() {
        if (isset($_POST['tambah'])) {
            $nik = $this->input->post('nik');
            $pemohon = $this->input->post('pemohon');
            $alamat = $this->input->post('alamat');
            $nama = $this->input->post('nama');
            $alaml = $this->input->post('alaml');
            $tgl = $this->input->post('tgl');
            $data = array('nik' => $nik , 'pemohon' => $pemohon, 'alamat_desa' => $alamat, 'nama_ksk' => $nama, 'alamat_lengkap' => $alaml, 'tgl' => date("Y-m-d"));
            $this->load->model('M_admin');
            $status = false;
            $cek = $this->M_admin->cek_nik_ada($nik);
            if($cek > 0){
                $temp = $this->M_admin->adm_tambah_ksk($data);
                $status = true;    
            }
            $temp = $this->M_admin->data_adm();
            $this->load->view('admin/data_administrasi/ksk/tabel_ksk', ['temp' => $temp, 'status' => $status]);
        } elseif (isset($_POST['kskadd'])) {
            $data['desa'] = $this->M_admin->data_desa();
            $this->load->view('admin/data_administrasi/ksk/ksk_tambah', $data);
        } else {
            $this->load->model('M_admin');
            $temp = $this->M_admin->data_adm();
            $this->load->view('admin/data_administrasi/ksk/tabel_ksk', ['temp' => $temp]);
        }
    }
    function kskedit($id) {
        $this->load->model('M_admin');
        $data['temp'] = $this->M_admin->adm_edit_ksk($id);
        $data['desa'] = $this->M_admin->data_desa();
        $this->load->view('admin/data_administrasi/ksk/ksk_edit', $data);
    }
    function kskedits($id) {
        if ($_POST['kskedit'] == 'Simpan') {
            $pemohon = $this->input->post('pemohon');
            $alamat = $this->input->post('alamat');
            $nama = $this->input->post('nama');
            $alaml = $this->input->post('alaml');
            $tgl = $this->input->post('tgl');
            $data = array('pemohon' => $pemohon, 'alamat_desa' => $alamat, 'nama_ksk' => $nama, 'alamat_lengkap' => $alaml, 'tgl' => $tgl);
            $this->load->model('M_admin');
            $temp = $this->M_admin->adm_simpan_ksk($data, $id);
            $temp = $this->M_admin->data_adm();
            $this->load->view('admin/data_administrasi/ksk/tabel_ksk', ['temp' => $temp]);
        } else {
            $this->load->model('M_admin');
            $temp = $this->M_admin->data_adm();
            $this->load->view('admin/data_administrasi/ksk/tabel_ksk', ['temp' => $temp]);
        }
    }
     function kskhapus($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_ksk($id);
        $temp = $this->M_admin->data_adm();
        $this->load->view('admin/data_administrasi/ksk/tabel_ksk', ['temp' => $temp]);
    }
    //sp
     function tabel_sp() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_sp();
        $this->load->view('admin/data_administrasi/sp/tabel_sp', ['temp' => $temp]);
    }
     function surat_pindah() {
        if (isset($_POST['spadd'])) {
            $this->load->view('admin/data_administrasi/sp/sp_tambah');
        } elseif (isset($_POST['tambah'])) {
            $nik = $this->input->post('nik');
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
            $data = array(
                'tgl' => date("Y-m-d"),
                'nama' => $nama,
                'nik' => $nik,
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
            $status = false;
            $cek = $this->M_admin->cek_nik_ada($nik);
            if($cek > 0){
                $temp = $this->M_admin->adm_simpan_sp($data);
                $status = true;    
            }
            $temp = $this->M_admin->data_sp();
            $this->load->view('admin/data_administrasi/sp/tabel_sp', ['temp' => $temp, 'status' => $status]);
        }
    }
     function surat_pindah_e($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_edit_sp($id);
        $this->load->view('admin/data_administrasi/sp/sp_edit', ['temp' => $temp]);
    }
    function surat_pindah_s($id) {
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
        $data = array(
            'tgl' => date("Y-m-d"),
            'nama' => $nama,
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
        $temp = $this->M_admin->adm_simpan_s($data, $id);
        $temp = $this->M_admin->data_sp();
        $this->load->view('admin/data_administrasi/sp/tabel_sp', ['temp' => $temp]);
    }
	function surat_pindah_h($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_sp($id);
        $temp = $this->M_admin->data_sp();
        $this->load->view('admin/data_administrasi/sp/tabel_sp', ['temp' => $temp]);
    }
    //akte
    function tabel_akte() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_akte();
        $this->load->view('admin/data_administrasi/akte/tabel_akte', ['temp' => $temp]);
    }
     function akte() {
        $this->load->view('admin/data_administrasi/akte/akte_tambah');
    }
    function tambah_akte() {
        $nik = $this->input->post('nik');
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
            'nik' => $nik,
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
        $status = false;
        $cek = $this->M_admin->cek_nik_ada($nik);
        if($cek > 0){
            $temp = $this->M_admin->adm_tambah_akte($data);
            $status = true;    
        }
        $temp = $this->M_admin->data_akte();
        $this->load->view('admin/data_administrasi/akte/tabel_akte', ['temp' => $temp, 'status' => $status  ]);
    }
    function akte_edit($id) {
         $this->load->model('M_admin');
        $temp = $this->M_admin->adm_edit_akte($id);
        $this->load->view('admin/data_administrasi/akte/akte_edit', ['temp' => $temp]);
    }
    function simpan_akte() {
        $no = $this->input->post('no');
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
        $temp = $this->M_admin->adm_simpan_akte($data, $no);
        $temp = $this->M_admin->data_akte();
        $this->load->view('admin/data_administrasi/akte/tabel_akte', ['temp' => $temp]);
    }
    function akte_hapus($id) {
         $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_akte($id);
        $temp = $this->M_admin->data_akte();
        $this->load->view('admin/data_administrasi/akte/tabel_akte', ['temp' => $temp]);
    }
    //ktp
     function tabel_ktp() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_ktp();
        $this->load->view('admin/data_administrasi/ktp/tabel_ktp', ['temp' => $temp]);
    }
    function ktp_tambah() {
        $data['desa'] = $this->M_admin->data_desa();
        $this->load->view('admin/data_administrasi/ktp/ktp_tambah', $data);
    }
     function tambah_ktp() {
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
            'tgl' => date("Y-m-d"),
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
        $status = false;
        $cek = $this->M_admin->cek_nik_ada($nik);
        if($cek > 0){
            $temp = $this->M_admin->adm_tambah_ktp($data);
            $status = true;    
        }
        $temp = $this->M_admin->data_ktp();
        $this->load->view('admin/data_administrasi/ktp/tabel_ktp', ['temp' => $temp, 'status' => $status]);
    }
    function ktp_edit($id) {
        $this->load->model('M_admin');
        $data['temp'] = $this->M_admin->adm_edit_ktp($id);
        $data['desa'] = $this->M_admin->data_desa();
        $this->load->view('admin/data_administrasi/ktp/ktp_edit', $data);
    }
    function ktp_edit_s() {
       $no = $this->input->post('no');
        $pemohon = $this->input->post('pemohon');
        $desa = $this->input->post('desa');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nik = $this->input->post('nik');
        $tmp = $this->input->post('tempat');
        $tgl_l = $this->input->post('tgl_l');
        $status = $this->input->post('status');
        $ket = $this->input->post('ket');
        $data = array(
            'tgl' => date("Y-m-d"),
            'pemohon' => $pemohon,
            'desa' => $desa,
            'nama' => $nama,
            'alamat' => $alamat,
            'nik' => $nik,
            'tempat_lahir' => $tmp,
            'tgl_lahir' => $tgl_l,
            'status' => $status,
            'ket' => $ket
        );
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_simpan_ktp($data, $no);
        $temp = $this->M_admin->data_ktp();
        $this->load->view('admin/data_administrasi/ktp/tabel_ktp', ['temp' => $temp]);
    }
    function ktp_hapus($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_ktp($id);
		$temp = $this->M_admin->data_ktp();
        $this->load->view('admin/data_administrasi/ktp/tabel_ktp', ['temp' => $temp]);
    }
    //-----------------------------data lapora-----------------------------//
     function data_laporan() {
        $this->load->view('admin/data_laporan/v_laporan');
    }
    function laporan_ksk(){
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_laporan_ksk();
        $this->load->view('admin/data_laporan/ksk/laporan_ksk', ['temp' => $temp]);
    }
     function export_laporan_ksk(){
        $this->load->model('M_admin');
        $temp= $this->M_admin->data_laporan_ksk();
        $this->load->view('admin/data_laporan/ksk/export_laporan_ksk',['temp' => $temp]);
    }
     function laporan_sp(){
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_laporan_sp();
        $this->load->view('admin/data_laporan/sp/laporan_sp', ['temp' => $temp]);
    }
     function export_laporan_sp(){
        $this->load->model('M_admin');
        $temp= $this->M_admin->data_laporan_sp();
        $this->load->view('admin/data_laporan/sp/export_laporan_sp',['temp' => $temp]);
    }
     function laporan_akte(){
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_laporan_akte();
        $this->load->view('admin/data_laporan/akte/laporan_akte', ['temp' => $temp]);
    }
     function export_laporan_akte(){
        $this->load->model('M_admin');
        $temp= $this->M_admin->data_laporan_akte();
        $this->load->view('admin/data_laporan/akte/export_laporan_akte',['temp' => $temp]);
    }
    function laporan_ktp(){
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_laporan_ktp();
        $this->load->view('admin/data_laporan/ktp/laporan_ktp', ['temp' => $temp]);
    }
     function export_laporan_ktp(){
        $this->load->model('M_admin');
        $temp= $this->M_admin->data_laporan_ktp();
        $this->load->view('admin/data_laporan/ktp/export_laporan_ktp',['temp' => $temp]);
    }
    //----------------------------management user----------------------------//
    function user()
    {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_user();
        $this->load->view('admin/data_user/tabel_user', ['temp' => $temp]);
    }
    function user_tambah()
    {
        $this->load->view('admin/data_user/user_tambah');
    }
    function tambah_user()
    {
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
        $temp = $this->M_admin->adm_tambah_user($data);
        $temp = $this->M_admin->data_user();
        $this->load->view('admin/data_user/tabel_user', ['temp' => $temp]);
    }
    function user_edit($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_edit_user($id);
        $this->load->view('admin/data_user/user_edit', ['temp' => $temp]);
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
        $temp = $this->M_admin->data_user();
        $this->load->view('admin/data_user/tabel_user', ['temp' => $temp]);
    }

    function user_verifikasi($nik) {
        $nik = $nik;
        $data = array(
            'verifikasi' => 1
        );
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_simpan_user($data, $nik);
        redirect('admin/C_admin/user');
    }

    function user_hapus($id) {
         $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_user($id);
        $temp = $this->M_admin->data_user();
        $this->load->view('admin/data_user/tabel_user', ['temp' => $temp]);
    }
    //-----------------------------informasi--------------------------------//
     function info() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_info();
        $this->load->view('admin/informasi/tabel_info', ['temp' => $temp]);
    }
    function info_tambah()
    {
        $this->load->view('admin/informasi/info_tambah');
    }
    function tambah_info()
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $foto = $this->input->post('foto');

        $config['upload_path']          = 'assets/uploads/info';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        $this->upload->do_upload('foto');
            // $data = array('upload_data' => $this->upload->data());
            // $data['namafile'] = $this->upload->data('file_name');
            // $data['foto'] = $this->upload->data('full_path');
        
            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'foto' => $this->upload->data('file_name'),
                'tanggal' => date('Y-m-d H:i:s') 
            );
            $this->load->model('M_admin');
            $temp = $this->M_admin->adm_tambah_info($data);

        redirect('admin/C_admin/info');
        
    }
    function info_edit($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_edit_info($id);
        $this->load->view('admin/informasi/info_edit', ['temp' => $temp]);
    }
    function simpan_info() {

        $no = $this->input->post('no');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        
        $config['upload_path']          = 'assets/uploads/info';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        if (isset($_FILES['foto']['name']) && $_FILES['foto']['name']!="") {
            if ($this->upload->do_upload('foto')){
                $data = array(
                    'no' => $no,
                    'judul' => $judul,
                    'isi' => $isi,
                    'foto' => $this->upload->data('file_name') 
                );
            }else{
                echo "Gagal\n"; 
                $this->upload->display_errors();
            }       
        }else{
            $data = array(
                'no' => $no,
                'judul' => $judul,
                'isi' => $isi
            );    
        }
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_simpan_info($data, $no);
        redirect('admin/C_admin/info');
    }
    function info_hapus($id) {
         $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_info($id);
        $temp = $this->M_admin->data_info();
        $this->load->view('admin/informasi/tabel_info', ['temp' => $temp]);
    }
    function info_view($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_view_info($id);
        $this->load->view('admin/informasi/v_info', ['temp' => $temp]);
    }
    //-----------------------------about-------------------------------------//
     function about() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_about();
        $this->load->view('admin/about/tabel_about', ['temp' => $temp]);
    }
    function about_tambah()
    {
        $this->load->view('admin/about/about_tambah');
    }
    function tambah_about()
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $foto = $this->input->post('foto');

        $config['upload_path']          = 'assets/uploads/about';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        $this->upload->do_upload('foto');
            // $data = array('upload_data' => $this->upload->data());
            // $data['namafile'] = $this->upload->data('file_name');
            // $data['foto'] = $this->upload->data('full_path');
        
        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            'foto' => $this->upload->data('file_name'),
            'tanggal' => date('Y-m-d H:i:s') 
        );
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_tambah_about($data);
        
        redirect('admin/C_admin/about');
        
    }
    function about_edit($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_edit_about($id);
        $this->load->view('admin/about/about_edit', ['temp' => $temp]);
    }
    function simpan_about() {

        $no = $this->input->post('no');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        
        $config['upload_path']          = 'assets/uploads/about';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        if (isset($_FILES['foto']['name']) && $_FILES['foto']['name']!="") {
            if ($this->upload->do_upload('foto')){
                $data = array(
                    'no' => $no,
                    'judul' => $judul,
                    'isi' => $isi,
                    'foto' => $this->upload->data('file_name') 
                );
            }else{
                echo "Gagal\n"; 
                $this->upload->display_errors();
            }       
        }else{
            $data = array(
                'no' => $no,
                'judul' => $judul,
                'isi' => $isi
            );    
        }
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_simpan_about($data, $no);
        redirect('admin/C_admin/about');
    }
    function about_hapus($id) {
         $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_about($id);
        $temp = $this->M_admin->data_about();
        $this->load->view('admin/about/tabel_about', ['temp' => $temp]);
    }
    function about_view($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_view_about($id);
        $this->load->view('admin/about/v_about', ['temp' => $temp]);
    }


}
 ?>