<?php 

class M_admin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_data_dps()
	{
		return $this->db->get('admin_dps')->result();
	}

    public function get_about($limit=null)
    {
        $this->db->limit($limit);
        return $this->db->get('admin_about')->result();
    }

    public function get_info($limit=null)
    {
        $this->db->limit($limit);
        return $this->db->get('admin_info')->result();
    }

	public function data_sipil() {
        $log = $this->db->get('admin_desa');
        return $log->result();
    }
     public function tambah_sipil($desa) {
        $query = $this->db->insert('admin_desa', $desa);
    }
     public function sipil_dps_e($id) {
        $this->db->where('no', $id);
        $log = $this->db->get('admin_desa');
        return $log->result();
    }
    public function simpan_sipil($data,$no){
        $this->db->where('no',$no);
        $log = $this->db->update('admin_desa', $data);
    }
    public function sipil_dps_h($id) {
        $this->db->where('no',$id);
        $log = $this->db->delete('admin_desa');
    }
     public function data_adm() {
        $sql = "SELECT a.*, b.desa as nama_desa FROM admin_ksk a INNER JOIN admin_desa b ON a.alamat_desa=b.no ORDER BY a.pemohon ASC";
        return $this->db->query($sql)->result();
    }

    public function data_ksk_user($nik,$no=null) {
        if($no == null){
            $sql = "SELECT a.*, b.desa as nama_desa FROM admin_ksk a INNER JOIN admin_desa b ON a.alamat_desa=b.no where a.nik = $nik ORDER BY a.pemohon ASC";
        }else{
            $sql = "SELECT a.*, b.desa as nama_desa FROM admin_ksk a INNER JOIN admin_desa b ON a.alamat_desa=b.no where a.nik = $nik and a.no = $no ORDER BY a.pemohon ASC";
        }
        
        return $this->db->query($sql)->result();
    }

     public function data_dps($id) {
        $this->db->where('desa', $id);
         $log = $this->db->get('admin_dps');
        return $log->result();
    }
     public function adm_tambah_dps($data){
        $query = $this->db->insert('admin_dps', $data);
    }
     public function adm_edit_dps($id) {
        $this->db->where('no', $id);
        $log = $this->db->get('admin_dps');
        return $log->result();
    }
     public function adm_simpan_dps($data, $no) {
        $this->db->where('no', $no);
        $log = $this->db->update('admin_dps' , $data);
    }
     public function adm_hapus_dps($id) {
         $this->db->where('no',$id);
        $log = $this->db->delete('admin_dps');
    }
    public function data_desa() {
        $log = $this->db->get('admin_desa');
        return $log->result();
    }
     public function adm_tambah_ksk($data) {
        $query = $this->db->insert('admin_ksk', $data);
    }
     public function adm_edit_ksk($id) {
        $this->db->where('no', $id);
        $log = $this->db->get('admin_ksk');
        return $log->result();
    }
    public function adm_simpan_ksk($data,$id) {
        $this->db->where('no',$id);
        $log = $this->db->update('admin_ksk', $data);
    }
    public function adm_hapus_ksk($id) {
         $this->db->where('no',$id);
        $log = $this->db->delete('admin_ksk');
    }
     public function data_sp($nik=null) {
        if($nik!=null){
            $this->db->where('nik', $nik);
        }
        $log = $this->db->get('admin_sp');
        return $log->result();
    }
    public function adm_simpan_sp($data) {
        $log = $this->db->insert('admin_sp', $data);
    }
     public function adm_edit_sp($id) {
        $this->db->where('no', $id);
        $log = $this->db->get('admin_sp');
        return $log->result();
    }
     public function adm_simpan_s($data,$id) {
        $this->db->where('no',$id);
        $log = $this->db->update('admin_sp', $data);
    }
     public function adm_hapus_sp($id) {
        $this->db->where('no', $id);
        $log = $this->db->delete('admin_sp');
    }
    public function data_akte() {
        $log = $this->db->get('admin_akte');
        return $log->result();
    }

    public function data_akte_user($nik) {
        $this->db->where('nik',$nik);
        $log = $this->db->get('admin_akte');
        return $log->result();
    }

    public function adm_tambah_akte($data) {
        $query = $this->db->insert('admin_akte', $data);
    }

    public function cek_nik_ada($nik){
        $this->db->where('nik',$nik);
        $log = $this->db->get('user');
        return $log->num_rows();   
    }

    public function adm_edit_akte($id) {
         $this->db->where('no',$id);
        $log = $this->db->get('admin_akte');
        return $log->result();
    }
    public function adm_simpan_akte($data,$no) {
        $this->db->where('no',$no);
        $log = $this->db->update('admin_akte', $data);
    }
    public function adm_hapus_akte($id) {
         $this->db->where('no',$id);
        $log = $this->db->delete('admin_akte');
    }
    public function data_ktp() {
        $sql = "SELECT a.*, b.desa as nama_desa FROM admin_ktp a INNER JOIN admin_desa b ON a.desa=b.no  ORDER BY a.pemohon ASC";
        return $this->db->query($sql)->result();
    }


    public function data_ktp_user($nik,$no=null) {
        if($no==null){
         $sql = "SELECT a.*, b.desa as nama_desa FROM admin_ktp a INNER JOIN admin_desa b ON a.desa=b.no where a.nik = $nik ORDER BY a.pemohon ASC";
        }else{
            $sql = "SELECT a.*, b.desa as nama_desa FROM admin_ktp a INNER JOIN admin_desa b ON a.desa=b.no where a.nik = $nik and a.no = $no ORDER BY a.pemohon ASC";
        }
        return $this->db->query($sql)->result();
    }
    public function adm_tambah_ktp($data) {
        $query = $this->db->insert('admin_ktp', $data);
    }
    public function adm_edit_ktp($id) {
        $this->db->where('no',$id);
        $log = $this->db->get('admin_ktp');
        return $log->result();
    }
     public function adm_simpan_ktp($data,$no) {
        $this->db->where('no',$no);
        $log = $this->db->update('admin_ktp', $data);
    }
    public function adm_hapus_ktp($id) {
        $this->db->where('no', $id);
        $log = $this->db->delete('admin_ktp');
    }
    public function data_laporan_ksk() {
        $log = $this->db->query('SELECT count(no) as total, `tgl` FROM `admin_ksk` group by tgl');
        return $log->result();
    }
     public function data_laporan_sp() {
        
        $log = $this->db->query('SELECT count(no) as total, `tgl_pindah` as tgl FROM `admin_sp` group by `tgl_pindah`');
        return $log->result();
    }
     public function data_laporan_akte() {
        $log = $this->db->query('SELECT count(no) as total, tgl FROM `admin_akte` group by `tgl`');
        return $log->result();
    }
    public function data_laporan_ktp() {
        $log = $this->db->query('SELECT count(no) as total, tgl FROM `admin_ktp` group by `tgl`');
        return $log->result();
    }
    public function data_user()
    {
         $log = $this->db->get('user');
        return $log->result();
    }
    public function adm_tambah_user($data)
    {
        $query = $this->db->insert('user', $data);
    }
    public function adm_edit_user($id) {
        $this->db->where('nik',$id);
        $log = $this->db->get('user');
        return $log->result();
    }
    public function adm_simpan_user($data,$nik) {
        $this->db->where('nik',$nik);
        $log = $this->db->update('user', $data);
    }
    public function adm_hapus_user($id) {
        $this->db->where('nik',$id);
        $log = $this->db->delete('user');
    }
    public function data_info()
    {
         $log = $this->db->get('admin_info');
        return $log->result();
    }
    public function adm_tambah_info($data)
    {
        $query = $this->db->insert('admin_info', $data);
    }
    public function adm_edit_info($id) {
        $this->db->where('no',$id);
        $log = $this->db->get('admin_info');
        return $log->result();
    }
    public function adm_simpan_info($data,$no) {
        $this->db->where('no',$no);
        $log = $this->db->update('admin_info', $data);
    }
    public function adm_hapus_info($id) {
        $this->db->where('no',$id);
        $log = $this->db->delete('admin_info');
    }
     public function adm_view_info($id) {
        $this->db->where('no',$id);
        $log = $this->db->get('admin_info');
        return $log->result();
    }
    public function data_kepala($username) {
        $this->db->where('nik', $username);
        return $this->db->get('user')->result();
    }
    //=========== about
    public function data_about()
    {
         $log = $this->db->get('admin_about');
        return $log->result();
    }
    public function adm_tambah_about($data)
    {
        $query = $this->db->insert('admin_about', $data);
    }
    public function adm_edit_about($id) {
        $this->db->where('no',$id);
        $log = $this->db->get('admin_about');
        return $log->result();
    }
    public function adm_simpan_about($data,$no) {
        $this->db->where('no',$no);
        $log = $this->db->update('admin_about', $data);
    }
    public function adm_hapus_about($id) {
        $this->db->where('no',$id);
        $log = $this->db->delete('admin_about');
    }
     public function adm_view_about($id) {
        $this->db->where('no',$id);
        $log = $this->db->get('admin_about');
        return $log->result();
    }

    public function adm_view_informasi($id) {
        $this->db->where('no',$id);
        $log = $this->db->get('admin_info');
        return $log->result();
    }

    

}
 ?>