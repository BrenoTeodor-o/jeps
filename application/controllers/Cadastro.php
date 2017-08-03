<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('includes/html_header');
		//$this->load->view('includes/menu');
		$this->load->view('precadastro');
		$this->load->view('includes/html_footer');
		
	}
	public function insert() {
        /* Define as tags onde a mensagem de erro será exibida na página */
		$this->form_validation->set_error_delimiters('<span class="alert alert-danger">', '</span>');

		/* Define as regras para validação */
		$validacoes = array(
	        /*
			Não tem o campo grupo no banco
	        array(
	            'field' => 'grupo',
	            'label' => 'Grupos',
	            'rules' => 'trim|required|max_length[11]'
	        ),*/
	        array(
	            'field' => 'nome',
	            'label' => 'Nome',
	            'rules' => 'trim|max_length[45]'
	        ),
	        array(
	            'field' => 'cnpj',
	            'label' => 'CNPJ',
	            'rules' => 'trim|max_length[14]'
	        ),
	        array(
	            'field' => 'cidade',
	            'label' => 'Cidade',
	            'rules' => 'trim|max_length[45]'
	        ),
	        array(
	            'field' => 'email',
	            'label' => 'E-mail',
	            'rules' => 'trim|max_length[45]|valid_email'
	        )

	        /*
	        Não tem o campo curso no banco
	        array(
	            'field' => 'curso',
	            'label' => 'Curso',
	            'rules' => 'trim|max_length[20]'
	        ),*/
	    );
    	$this->form_validation->set_rules($validacoes);
		/* Executa a validação e caso houver erro chama a função que retorna ao formulário */
		if ($this->form_validation->run() === FALSE) {
			$this->form_create();
		/* Senão, caso sucesso: */
		} else {
			$data = new stdClass();
			/* Recebe os dados do formulário (visão) */
			foreach ($this->input->post() as $key => $value){
				$data->$key = $value;
			}

			/* Abre uma transação */
			$this->db->trans_start();

			/* Dados para cadastro de fornecedor */
			$ResponsavelInstitucional = new stdClass();
			$ResponsavelInstitucional->cpf = $data->cpf;
			$ResponsavelInstitucional->rg = $data->rg;
			$ResponsavelInstitucional->nome = $data->nome;
			$ResponsavelInstitucional->telefone = $data->telefone;
			$ResponsavelInstitucional->email = $data->email;
			
			$idResponsavelInstituicao = $this->crud->insert('ResponsavelInstitucional', $ResponsavelInstitucional);
			//echo $id_fornecedor . "<br /><br />";

			/* Fecha a transação */
			$this->db->trans_complete();

			if ($this->db->trans_status() === TRUE) {
			    $this->db->trans_commit();
			} else {
			    $this->db->trans_rollback();

			}
			/*
			if ($this->crud->Insert($data)) {
				redirect('aluno');
			} else {
				log_message('error', 'Erro ao inserir a aluno.');
			}
			*/
		}
        redirect('responsavel', 'refresh');
    }
}
