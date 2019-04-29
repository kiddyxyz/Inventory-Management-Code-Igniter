<?php


class Model_all extends CI_Model{

    function query($query){
        return $this->db->query($query)->result();
    }

    function chart(){
        $query = $this->db->query("SELECT jurusan,jumlah,angkatan FROM mahasiswa");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get($table){
        return $this->db->get($table);
    }

    function show($where, $table){
        return $this->db->get_where($table, $where);
    }

    function store($data, $table){
        $this->db->insert($table, $data);
    }

    function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}