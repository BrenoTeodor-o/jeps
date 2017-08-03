<?php

class Usuario_model extends CI_Model
{
    public function validaChave($chave){
        $this->db->set("status",1);
        $this->db->where("chave",$chave);
        $this->db->update("usuario");
    }

    public function buscaStatus($cpf_cnpj){
        $this->db->where("login",$cpf_cnpj);
        $acesso = $this->db->select("status");
        $this->db->get("usuario");
        return $acesso;
    }

    public function buscaAcesso($cpf_cnpj){
        $this->db->where("login",$cpf_cnpj);
        $this->db->get("usuario");
        $acesso = $this->db->select("acesso");
        return $acesso;
    }

    public function buscaLoginSenha($cpf_cnpj,$senha){
        $this->db->where("login",$cpf_cnpj);
        $this->db->where("senha",$senha);
        $usuario = $this->db->get("usuario")->row_array();
        return $usuario;
    }
}