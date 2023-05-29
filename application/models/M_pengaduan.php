<?php

class M_pengaduan extends CI_Model
{

        public function show_data()
        {

            $this->db->select('id_pengaduan_masuk, id_user, nama, nik, alamat_pelapor, rt_rw, tanggal, isi_laporan, file, foto, nama_kategori');
            $this->db->from('pengaduan_masuk');
            $this->db->join('kategori', 'pengaduan_masuk.id_kategori = kategori.id_kategori');
            // $this->db->get();
            
            $query = $this->db->get();
            return $query;
        }

        public function show_data_proses()
        {

            $this->db->select('id_pengaduan_proses, id_user, nama, nik, alamat_pelapor, rt_rw, tanggal, isi_laporan, file, foto, nama_kategori');
            $this->db->from('pengaduan_proses');
            $this->db->join('kategori', 'pengaduan_proses.id_kategori = kategori.id_kategori');
            // $this->db->get();
            
            $query = $this->db->get();
            return $query;
        }

        public function show_kategori()
        {
            $this->db->select('nama_kategori');
            $this->db->from('kategori');
            $query = $this->db->get();

            return $query;
        }

        public function get_data($table){
            return $this->db->get($table);
        }

        public function insert_data($data, $table){
            $this->db->insert($table,$data);
        }

        public function update_data($table, $data, $where){
            $this->db->update($table,$data, $where);
        }

        public function delete_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
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

        public function jenis_pengaduan()
            {
                return $this->db->get('kategori')->result();
            }
    }
