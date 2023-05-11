<?php
class M_akun extends CI_Model
{

    public function login($data)
    {
        return $this->db->get_where('user', $data);
    }

    public function show_data()
    {
        return $this->db->query('SELECT * FROM user');
    }

    // menampilkan data level
    public function tampil_level()
    {
        return  $this->db->query("SELECT * FROM level");
    }

    public function tampil_pegawai()
    {
        return  $this->db->query("SELECT * FROM pegawai");
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_data_by_id($id_user)
    {
        $query = $this->db->query("SELECT * FROM user WHERE id_user = '$id_user'");
        return $query->row();
    }

    public function cek_data($username)
    {
    $this->db->select('username');
    $this->db->where('username',$username);		
    $query =$this->db->get('user');
    $row = $query->row();
    if ($query->num_rows > 0){
         return $row->username; 
    }else{
         return "";
    }
    }

    public function insert_data($data, $table)
    {
       ($this->db->insert($table, $data));
    }

    public function update_data($table, $data, $where)
    // public function update_data($id)
    {
        return $this->db->update($table, $data, $where);
        // return $this->db->get_where('akun', ['id_akun' => $id])->row_array();
    }


    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data($id_akun)
    {
        $query = $this->db->query("SELECT * FROM user")->row();
        return $query;
    }

    // public function cek_login()
    // {
    //     $username   = set_value('username');
    //     $password   = set_value('password');

    //     $result     = $this->db->where('username', $username)
    //         ->where('password', md5($password))
    //         ->limit(1)
    //         ->get('user');

    //     if ($result->num_rows() > 0) {
    //         return $result->row();
    //     } else {
    //         return FALSE;
    //     }
    // }

    public function cek_login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->join('level', 'level.id_level=akun.id_level');
        $this->db->like('level', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('akun.nip', $keyword);
        $this->db->or_like('username', $keyword);
        return $this->db->get()->result();
    }
}