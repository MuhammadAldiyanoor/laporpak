<?php
class M_akun extends CI_Model
{
    public function login($data)
    {
        return $this->db->get_where('user', $data);
    }
}