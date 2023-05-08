<?php

class M_rt extends CI_Model
{

public function show_data()
        {
            return $this->db->query('SELECT * FROM rt');
        }


        public function get_data($table){
            return $this->db->get($table);
        }

        public function insert_data($data, $data2){
            $this->db->insert($data, $data2);
        }

        public function update_data($table, $data, $where){
            $this->db->update($table,$data, $where);
        }

        public function delete_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
    }