<?php

class Modalidades_model extends CI_Model
{
    function insert($Modalidade, $data) {
        //die(print_r($data));
        $this->db->insert($Modalidade, $data);
        return $this->db->insert_id();
    }

    function retrieve($Modalidade, $modalidade = null) {
        if ($modalidade == null){
            $query = $this->db->get($Modalidade);
        } else {
            $query = $this->db->where($modalidade);
            $query = $this->db->get($Modalidade);
        }
            return $query->result();
    }
}