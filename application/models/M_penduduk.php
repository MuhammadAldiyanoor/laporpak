<?php

class M_penduduk extends CI_Model
{

        public function show_data()
        {
            // return $this->db->query('SELECT * FROM pengaduan');
            return $this->db->get('masyarakat')->result();
        }

        public function get_data($table){
            return $this->db->get($table);
        }

        public function insert_data($table,$data){
            $this->db->insert($table,$data);
        }

        public function update_data($table, $data, $where){
            $this->db->update($table,$data, $where);
        }

        public function delete_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function cek_penduduk($nik)
    {
        $this->db->select('*');
        $this->db->from('masyarakat');
        $this->db->where("nik = '$nik'");
        $query = $this->db->get();
        $row = $query->row();
        if ($query->num_rows > 0){
             return $row->nik; 
        }else{
             return "";
        }
    }

        public function pengaduan_masuk($id){

            $query = "INSERT INTO pengaduan_masuk (`id_pengaduan`, `id_user`, `id_kategori`, `nik`, `nama`, `rt_rw`, `alamat_pelapor`, `tanggal`, `lokasi`, `jenis_pengaduan`, `isi_laporan`, `foto`, `id_petugas`, `tanggal_diproses`, `file`) SELECT `id_pengaduan`, `id_user`, `id_kategori`, `nik`, `nama`, `rt_rw`, `alamat_pelapor`, `tanggal`, `lokasi`, `jenis_pengaduan`, `isi_laporan`, `foto`, `id_petugas`, `tanggal_diproses`, `file` FROM `pengaduan` WHERE `id_pengaduan` = $id";
            $this->db->query($query);
            
            return  $this->db->affected_rows();
        }

        public function pengaduan_ditolak($id){
$query ="INSERT INTO pengaduan_ditolak (`id_pengaduan_ditolak`, `id_user`, `id_kategori`, `nik`, `nama`, `rt_rw`, `alamat_pelapor`, `tanggal`, `lokasi`, `jenis_pengaduan`, `isi_laporan`, `foto`, `id_petugas`, `tanggal_ditolak`, `file`) SELECT `id_pengaduan_masuk`, `id_user`, `id_kategori`, `nik`, `nama`, `rt_rw`, `alamat_pelapor`, `tanggal`, `lokasi`, `jenis_pengaduan`, `isi_laporan`, `foto`, `id_petugas`, `tanggal_diproses`, `file` FROM `pengaduan_masuk` WHERE `id_pengaduan_masuk` = $id";
            $this->db->query($query);

            $query2 = "DELETE FROM pengaduan_masuk WHERE id_pengaduan_masuk = $id";
            $this->db->query($query2);
            return  $this->db->affected_rows();
        }

        public function pengaduan_proses($id){
$query ="INSERT INTO pengaduan_proses (`id_pengaduan_proses`, `id_user`, `id_kategori`, `nik`, `nama`, `rt_rw`, `alamat_pelapor`, `tanggal`, `lokasi`, `jenis_pengaduan`, `isi_laporan`, `foto`, `id_petugas`, `tanggal_diproses`, `file`) SELECT `id_pengaduan_masuk`, `id_user`, `id_kategori`, `nik`, `nama`, `rt_rw`, `alamat_pelapor`, `tanggal`, `lokasi`, `jenis_pengaduan`, `isi_laporan`, `foto`, `id_petugas`, `tanggal_diproses`, `file` FROM `pengaduan_masuk` WHERE `id_pengaduan_masuk` = $id";
            $this->db->query($query);

            $query2 = "DELETE FROM pengaduan_masuk WHERE id_pengaduan_masuk = $id";
            $this->db->query($query2);
            return  $this->db->affected_rows();

        }

        public function pengaduan_selesai($id){
$query ="INSERT INTO pengaduan_selesai (`id_pengaduan_selesai`, `id_user`, `id_kategori`, `nik`, `nama`, `rt_rw`, `alamat_pelapor`, `tanggal`, `lokasi`, `jenis_pengaduan`, `isi_laporan`, `foto`, `id_petugas`, `tanggal_diproses`, `file`) SELECT `id_pengaduan_proses`, `id_user`, `id_kategori`, `nik`, `nama`, `rt_rw`, `alamat_pelapor`, `tanggal`, `lokasi`, `jenis_pengaduan`, `isi_laporan`, `foto`, `id_petugas`, `tanggal_diproses`, `file` FROM `pengaduan_proses` WHERE `id_pengaduan_proses` = $id";
            $this->db->query($query);

            $query2 = "DELETE FROM pengaduan_proses WHERE id_pengaduan_proses = $id";
            $this->db->query($query2);
            return  $this->db->affected_rows();
        }
    }