<?php
class M_akun extends CI_Model
{
    public function login($data)
    {
        return $this->db->get_where('user', $data);
    }
    public function cek_login()
    {
        $username   = set_value('username');
        $password   = set_value('password');

        $result     = $this->db->where('username', $username)
            ->where('password', md5($password))
            ->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan')
            ->limit(1)
            ->get('tb_akun');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
}