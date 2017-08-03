<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResponsavelInstituicao extends CI_Controller {
	/**
	 * Carrega o formulário para novo cadastro
	 * @param nenhum
	 * @return view
	 */
	public function index(){
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('responsavelinstituicao');// cadastro_responsavelinstituicao
		$this->load->view('includes/html_footer');
	}

	/**
	 * Salva o registro no banco de dados.
	 * Caso venha o valor id, indica uma edição, caso contrário, um insert.
	 * @param campos do formulário
	 * @return view
	 */
	public function store() {

		$this->load->model('responsavelInstituicao_model');
		$this->load->library('form_validation');
		
		$regras = array(
		        array(
	            'field' => 'cpf',
	            'label' => 'CPF',
	            'rules' => 'trim|required|max_length[11]'
	        ),
	        array(
	            'field' => 'rg',
	            'label' => 'RG',
	            'rules' => 'trim|max_length[20]'
	        ),
	        array(
	            'field' => 'nome',
	            'label' => 'Nome',
	            'rules' => 'trim|max_length[45]'
	        ),
	        array(
	            'field' => 'telefone',
	            'label' => 'Telefone',
	            'rules' => 'trim|max_length[11]'
	        ),
	        array(
	            'field' => 'email',
	            'label' => 'E-mail',
	            'rules' => 'trim|max_length[45]|valid_email'
	        )
	    );
		
		$teste = $this->form_validation->set_rules($regras);
		//echo "<pre>";
		//die(print_r($teste));


		if ($this->form_validation->run() == FALSE) {
			$variaveis['titulo'] = 'Novo Registro';
			$this->load->view('responsavelinstituicao', $variaveis);
		} else {
			$id = $this->responsavelInstituicao_model->getResponsavelbyCpf($this->input->post('cpf'));
			//$id = $this->input->post('id');

			//die(print_r($id));
			
			$dados = array(

				"cpf" => $this->input->post('cpf'),
				"rg" => $this->input->post('rg'),
				"nome" => $this->input->post('nome'),
				"telefone" => $this->input->post('telefone'),
				"email" => $this->input->post('email')
			
			);

			if ($this->responsavelInstituicao_model->store($dados, $id)) {
				//$variaveis['mensagem'] = "Dados gravados com sucesso!";
				//$this->load->view('v_sucesso', $variaveis);
				redirect('responsavel');
			} else {
				//$variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
				//$this->load->view('errors/html/v_erro', $variaveis);
				log_message('error', 'Erro ao inserir Responsável.');
			}	
		}
	}

/**
	 * Chama o formulário com os campos preenchidos pelo registro selecioando.
	 * @param $id do registro
	 * @return view
	 */
	public function edit($id = null){
		
		if ($id) {
			
			$cadastros = $this->responsavelInstituicao_model->get($id);
			
			if ($cadastros->num_rows() > 0 ) {
				$variaveis['titulo'] = 'Edição de Registro';
				$variaveis['id'] = $cadastros->row()->id;
				$variaveis['cpf'] = $cadastros->row()->cpf;
				$variaveis['rg'] = $cadastros->row()->rg;
				$variaveis['nome'] = $cadastros->row()->nome;
				$variaveis['telefone'] = $cadastros->row()->telefone;
				$variaveis['email'] = $cadastros->row()->email;
				$this->load->view('responsavelinstituicao', $variaveis);
			} else {
				//$variaveis['mensagem'] = "Registro não encontrado." ;
				log_message('error', 'Erro ao inserir Responsável.');
				//$this->load->view('errors/html/v_erro', $variaveis);
			}
			
		}
		
	}
	/**
	 * Função que exclui o registro através do id.
	 * @param $id do registro a ser excluído.
	 * @return boolean;
	 */
	public function delete($id = null) {
		if ($this->responsavelInstituicao_model->delete($id)) {
			//$variaveis['mensagem'] = "Registro excluído com sucesso!";
			//$this->load->view('v_sucesso', $variaveis);
			log_message('alert', 'Excluido');
		}
	}
}