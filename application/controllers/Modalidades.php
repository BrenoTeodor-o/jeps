<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modalidades extends CI_Controller {

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
		$this->load->view('includes/menu');
		//fazer um if pra verificar qual grupo foi selecionado
		$this->load->view('modalidades1');
		$this->load->view('includes/html_footer');	
	}

	public function insert() {
        /* Define as tags onde a mensagem de erro será exibida na página */
		$this->form_validation->set_error_delimiters('<span class="alert alert-danger">', '</span>');

		/* Define as regras para validação */
		$validacoes = array(
	        array(
	            'field' => 'categoria',
	            'label' => 'Categoria',
	            'rules' => 'trim|required|max_length[45]'
	        ),
	        array(
	            'field' => 'modalidade',
	            'label' => 'Modalidade',
	            'rules' => 'trim|max_length[45]'
	        ),
	        array(
	            'field' => 'sexo',
	            'label' => 'sexo',
	            'rules' => 'trim|max_length[15]'
	        )
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
			$Modalidade = new stdClass();
			$Modalidade->categoria = $data->categoria;
			$Modalidade->modalidade = $data->modalidade;
			$Modalidade->sexo = $data->sexo;
			
			$idModalidade = $this->crud->insert('Modalidade', $Modalidade);
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
