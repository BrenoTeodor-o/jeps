<?php

class ResponsavelInstituicao_model extends CI_Model
{
    /*function insert($ResponsavelInstitucional, $data) {
        //die(print_r($data));
        $this->db->insert($ResponsavelInstitucional, $data);
        return $this->db->insert_id();
    }

    function retrieve($ResponsavelInstitucional, $cpf = null) {
        if ($cpf == null){
            $query = $this->db->get($ResponsavelInstitucional);
        } else {
            $query = $this->db->where($cpf);
            $query = $this->db->get($ResponsavelInstitucional);
        }
            return $query->result();
    }*/

    /**
     * Grava os dados na tabela.
     * @param $dados. Array que contém os campos a serem inseridos
     * @param Se for passado o $id via parâmetro, então atualizo o registro em vez de inseri-lo.
     * @return boolean
     */
    public function store($dados = null, $id = null) {
        
        if (!is_null($dados)) {
            if (!is_null($id)) {
                $this->db->where('id', $id);
                if ($this->db->update("PessoaFisica", $dados)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($this->db->insert("PessoaFisica", $dados)) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        
    }

    public function getResponsavelbyCpf($cpf) {
        $query = $this->db->where('cpf', $cpf);
        $query = $this->db->get('PessoaFisica');
        echo "<pre>";
        die(print_r($query->result()));
        return $query->result();
    }
    /**
     * Recupera o registro do banco de dados
     * @param $id - Se indicado, retorna somente um registro, caso contário, todos os registros.
     * @return objeto da banco de dados da tabela cadastros
     */
    public function get($id = null){
        
        if ($id) {
            $this->db->where('id', $id);
        }
        $this->db->order_by("id", 'desc');
        return $this->db->get('PessoaFisica');
    }
    /**
     * Deleta um registro.
     * @param $id do registro a ser deletado
     * @return boolean;
     */
    public function delete($id = null){
        if ($id) {
            return $this->db->where('id', $id)->delete('PessoaFisica');
        }
    }
}



