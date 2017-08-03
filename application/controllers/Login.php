<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('includes/html_header');
        //$this->load->view('includes/menu');
        $this->load->view('login');
        $this->load->view('includes/html_footer');
    }


	 public function autenticar(){
        $this->load->model("Usuario_model");
        $cpf_cnpj = $this->input->post("cnpj");
        $senha = $this->input->post("senha");
        $usuario = $this->Usuario_model->buscaLoginSenha($cpf_cnpj,$senha);
        $acesso = $this->Usuario_model->buscaAcesso($cpf_cnpj);
        $status = $this->Usuario_model->buscaStatus($cpf_cnpj);

        if($usuario && $acesso == 1 && $status = 1){
            $this->load->view("responsavel");
        } elseif($usuario && $acesso == 8 && $status = 1){
            $this->load->view("listarCadastros");
        }else{
            //fazer mais um elseif pra verificar o grupo, ai traz view modalidade 1,2 ou 3
            $this->load-view("modalidades");
        }
    }

    public function confirmaEmail(){
        $this->load->model("Usuario_model");
        $chave = $this->input->post("chave");
        $this->Usuario_model->validaChave($chave);
    }

    public function enviaEmailRegistro(){
        $senha = rand(111111111,999999999);
        $para = $this->input->post("email");
        $this->email->from("seu_email@gmail.com", 'Meu E-mail');
        $this->email->subject("Jogos Estudantos da Primavera - E-mail de confirmação ");
        $this->email->to($para);
        $this->email->message("Sua senha pra entrar no sistema é $senha. Clique no link a seguir para confirmar o cadastrado: $link ");
        $this->email->send();
    }
}