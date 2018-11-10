<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_user extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_admin');
        $this->load->library('enkripsi');
	}
	function index()
	{
        $data['about'] = $this->M_admin->get_about(3);
	   $this->load->view('user/v_home_user',$data);	
	}
    //ksk
    function tabel_ksk() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_ksk_user($this->session->userdata('username'));
        $this->load->view('user/data_administrasi/ksk/tabel_ksk', ['temp' => $temp]);
    }

    public function cetak_ksk($id){
        $id = $this->enkripsi->decode($id);
        $temp['data'] = $this->M_admin->data_ksk_user($this->session->userdata('username'),$id);
        $this->load->library('pdf');
        
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "permohonan-ksk.pdf";
        $this->pdf->load_view('laporan/ksk', $temp);
    }

    //tambah ksk
    function tambah_ksk() {
        if (isset($_POST['tambah'])) {
            $pemohon = $this->input->post('pemohon');
            $alamat = $this->input->post('alamat');
            $nama = $this->input->post('nama');
            $alaml = $this->input->post('alaml');
            // $tgl = $this->input->post('tgl');
            $data = array('nik' => $this->session->userdata('username') , 'pemohon' => $pemohon, 'alamat_desa' => $alamat, 'nama_ksk' => $nama, 'alamat_lengkap' => $alaml, 'tgl' => date("Y-m-d"));
            $this->load->model('M_admin');
            $temp = $this->M_admin->adm_tambah_ksk($data);

            $temp = $this->M_admin->data_adm();
            // $this->load->view('public/v_konfirmasi', ['temp' => $temp]);
            redirect('user/C_user/tabel_ksk');
        }else{
            $data['desa'] = $this->M_admin->data_desa();
            $this->load->view('user/data_administrasi/ksk/tambah_ksk',$data);    
        }
        
    }

    function kskedit($id) {
        $this->load->model('M_admin');
        $data['temp'] = $this->M_admin->adm_edit_ksk($id);
        $data['desa'] = $this->M_admin->data_desa();
        $this->load->view('user/data_administrasi/ksk/ksk_edit', $data);
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
            // $temp = $this->M_admin->data_adm();
            // $this->load->view('user/data_administrasi/ksk/tabel_ksk', ['temp' => $temp]);
            redirect('user/C_user/tabel_ksk');
        } else {
            $this->load->model('M_admin');
            $temp = $this->M_admin->data_adm();
            $this->load->view('user/data_administrasi/ksk/tabel_ksk', ['temp' => $temp]);
        }
    }
     function kskhapus($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_ksk($id);
        // $temp = $this->M_admin->data_adm();
        // $this->load->view('user/data_administrasi/ksk/tabel_ksk', ['temp' => $temp]);
        redirect('user/C_user/tabel_ksk');
    }
    //sp
     function tabel_sp() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_sp($this->session->userdata('username'));
        $this->load->view('user/data_administrasi/sp/tabel_sp', ['temp' => $temp]);
    }

    //tambah sp
    function tambah_sp(){
        if (isset($_POST['tambah'])) {
            
            $nama = $this->input->post('nama');
            $tempat = $this->input->post('tempat');
            $tgl = $this->input->post('tgl');
            $alamat = $this->input->post('alamat');
            $np = $this->input->post('np');
            $jp = $this->input->post('jp');
            $almp = $this->input->post('almp');
            $alasan = $this->input->post('alasan');
            $tgl_p = $this->input->post('tgl_p');
            // $ket = $this->input->post('ket');
            
            $config['upload_path']          = 'assets/uploads/foto';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')){
                // $data = array('upload_data' => $this->upload->data());
                // $data['namafile'] = $this->upload->data('file_name');
                // $data['foto'] = $this->upload->data('full_path');
            
                $data = array(
                    'tgl' => date("Y-m-d"),
                    'nik' => $this->session->userdata('username'),
                    'nama' => $nama,
                    'tempat_lahir' => $tempat,
                    'tgl_lahir' => $tgl,
                    'alamat' => $alamat,
                    'no_pengantar' => $np,
                    'jumlah_pengikut' => $jp,
                    'alamat_pindah' => $almp,
                    'alasan_pindah' => $alasan,
                    'tgl_pindah' => $tgl_p,
                    'foto' => $this->upload->data('file_name') 
                );
                $this->load->model('M_admin');
                $temp = $this->M_admin->adm_simpan_sp($data);
                // echo "Berhasil";
            }else{
                echo "Gagal\n"; 
                $this->upload->display_errors();
            }
            // $temp = $this->M_admin->data_sp();
            redirect('user/C_user/tabel_sp');
        }else{
            $this->load->view('user/data_administrasi/sp/tambah_sp');    
        }
        
    }

     function surat_pindah_e($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_edit_sp($id);
        $this->load->view('user/data_administrasi/sp/sp_edit', ['temp' => $temp]);
    }

    public function cetak_sp($id){
        $id = $this->enkripsi->decode($id);
        $temp['data'] = $this->M_admin->adm_edit_sp($id);
        $this->load->library('pdf');
        
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "permohonan-sp.pdf";
        $this->pdf->load_view('laporan/sp', $temp);
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
        // $temp = $this->M_admin->data_sp();
        // $this->load->view('user/data_administrasi/sp/tabel_sp', ['temp' => $temp]);
        redirect('user/C_user/tabel_sp');
    }
	function surat_pindah_h($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_sp($id);
        // $temp = $this->M_admin->data_sp();
        // $this->load->view('user/data_administrasi/sp/tabel_sp', ['temp' => $temp]);
        redirect('user/C_user/tabel_sp');
    }
    //akte
    function tabel_akte() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_akte_user($this->session->userdata('username'));
        $this->load->view('user/data_administrasi/akte/tabel_akte', ['temp' => $temp]);
    }

    //tambah akte
    function tambah_akte(){
        if($this->input->post()){
            // $tgl = $this->input->post('tgl');
            $ayah = $this->input->post('ayah');
            $ibu = $this->input->post('ibu');
            $alamat = $this->input->post('alamat');
            $anak = $this->input->post('anak');
            $tmp = $this->input->post('tmp');
            $tgl_l = $this->input->post('tgl_l');
            $pot = $this->input->post('pot');
            $anak_k = $this->input->post('anak_k');
            $data = array(
                'tgl' => date("Y-m-d"),
                'nik' => $this->session->userdata('username'),
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
            redirect('user/C_user/tabel_akte'); 
        }else{
            $this->load->view('user/data_administrasi/akte/tambah_akte');
        }
    }

    public function cek (){
        $this->load->library('enkripsi');
        echo $this->enkripsi->encode("Rizal");
    }

    public function cetak_akte($id){
        $this->load->library('enkripsi');
        $id = $this->enkripsi->decode($id);
        $temp['data'] = $this->M_admin->adm_edit_akte($id);
        $this->load->library('pdf');
        
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "permohonan-akte.pdf";
        $this->pdf->load_view('laporan/akte', $temp);
    }

    function akte_edit($id) {
         $this->load->model('M_admin');
        $temp = $this->M_admin->adm_edit_akte($id);
        $this->load->view('user/data_administrasi/akte/akte_edit', ['temp' => $temp]);
    }
    function simpan_akte() {
        $no = $this->input->post('no');
        // $tgl = $this->input->post('tgl');
        $ayah = $this->input->post('ayah');
        $ibu = $this->input->post('ibu');
        $alamat = $this->input->post('alamat');
        $anak = $this->input->post('anak');
        $tmp = $this->input->post('tmp');
        $tgl_l = $this->input->post('tgl_l');
        $pot = $this->input->post('pot');
        $anak_k = $this->input->post('anak_k');
        $data = array(
            'tgl' => date("Y-m-d"),
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
        // $temp = $this->M_admin->data_akte();
        // $this->load->view('user/data_administrasi/akte/tabel_akte', ['temp' => $temp]);
        redirect('user/C_user/tabel_akte');
    }
    function akte_hapus($id) {
         $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_akte($id);
        // $temp = $this->M_admin->data_akte();
        // $this->load->view('user/data_administrasi/akte/tabel_akte', ['temp' => $temp]);
        redirect('user/C_user/tabel_akte');
    }
    //ktp
     function tabel_ktp() {
        $this->load->model('M_admin');
        $temp = $this->M_admin->data_ktp_user($this->session->userdata('username'));
        // echo "<pre>";
        // print_r($this->session->userdata('username'));
        // echo "</pre>";
        $this->load->view('user/data_administrasi/ktp/tabel_ktp', ['temp' => $temp]);
    }

    public function cetak_ktp($id){
        $id = $this->enkripsi->decode($id);
        $temp['data'] = $this->M_admin->data_ktp_user($this->session->userdata('username'),$id);
        $this->load->library('pdf');
        
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "permohonan-ktp.pdf";
        $this->pdf->load_view('laporan/ktp', $temp);
    }

    //tambah KTP
    function tambah_ktp(){
        if(isset($_POST['tambah'])){
            // $tgl = $this->input->post('tgl');
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
                'nik' => $this->session->userdata('username'),
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_l,
                'status' => $status,
                'ket' => $ket
            );
            $this->load->model('M_admin');
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            $temp = $this->M_admin->adm_tambah_ktp($data);
            // $this->load->view('public/v_konfirmasi', ['temp' => $temp]);
            redirect('user/C_user/tabel_ktp');
        }else{
            $data['desa'] = $this->M_admin->data_desa();
            $this->load->view('user/data_administrasi/ktp/tambah_ktp',$data);
        }
    }

    function ktp_edit($id) {
        $this->load->model('M_admin');
        $data['temp'] = $this->M_admin->adm_edit_ktp($id);
        $data['desa'] = $this->M_admin->data_desa();
        $this->load->view('user/data_administrasi/ktp/ktp_edit', $data);
    }
    function ktp_edit_s() {
       $no = $this->input->post('no');
       // $tgl = $this->input->post('tgl');
        $pemohon = $this->input->post('pemohon');
        $desa = $this->input->post('desa');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
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
            'tempat_lahir' => $tmp,
            'tgl_lahir' => $tgl_l,
            'status' => $status,
            'ket' => $ket
        );
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_simpan_ktp($data, $no);
        redirect('user/C_user/tabel_ktp');
    }
    function ktp_hapus($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_hapus_ktp($id);
		redirect('user/C_user/tabel_ktp');
    }

    function about_view($id) {
        $this->load->model('M_admin');
        $temp = $this->M_admin->adm_view_about($id);
        $this->load->view('user/about/v_lihat_about', ['temp' => $temp]);
    }
    function about()
    {
        $data['about'] = $this->M_admin->get_about();
       $this->load->view('user/about/about',$data); 
    }
}
 ?>