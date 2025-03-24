<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estado extends CI_Controller
{
	public function index() // caso exista uma funcao index(), ela será escutada automaticamente
	
	{
		// Carrega o model, que contem o acesso ao db
		$this->load->model('EstadoModel');

		// Chama a função que seleciona todos os estados no model
		$tabela = $this->EstadoModel->SelecionarTodos();

		$dados = array(
			//todo o array se transforma em variaveis
			'titulo'=>'Lista das Cidades/UF', // titulo da página
			'tabela'=>$tabela, // tabela de estados
		);
		
		$this->load->view('index', $dados); // carrega a view index.php
	}

	// Função para chamar a view de cadastro
	public function Cadastrar()
	{
		$dados = array(
			'titulo'=>'Cadastrar um novo Estado',
			'pagina'=>'estados/cadastrar.php'
		);

		$this->load->view('estados/cadastrar.php', $dados); // carrega a view cadastrar.php
	}

	public function Salvar(){
		$this->load->model('EstadoModel'); // carrega o model
		$this->EstadoModel->incluirDB(); // chama a função incluirDB do model

		redirect('index.php/estado');
	}

	public function Editar($codigo){ //É O METODO GET
		$this->load->model('EstadoModel'); // carrega o model
		
		$where = array('id' => $codigo); //where vai receber o id passado na url, metodo do querybuilder
		
		$resultado = $this->EstadoModel->selecionar($where); //resultado recebe os dados que veio do db

		$dados = array(
			'titulo'=>'Alterar uma Cidade/UF',
			'tabela'=>$resultado // atribuiu o $resultado que pegou do model a variavel tabela
		);

		$this->load->view('estados/editar.php', $dados); //manda os dados para o editar.php
	}
	public function editaralteracao() {// É O METODO POST
		$this->load->model('EstadoModel');
		
		$id = $this->input->post('id'); // pega o ID do campo hidden do formulário
		
		$dados = array( //pegando os novos dados dos inputs
			'cidade' => $this->input->post('cidade'),
			'sigla' => $this->input->post('sigla')
		);
		
		if ($this->EstadoModel->atualizarDB($id, $dados)) {
			redirect('index.php');
		} else {
			// ERROR
		}
	}

	public function excluir($id) {
		$this->load->model('EstadoModel');
		
		// excluir o registro
		$this->EstadoModel->excluirDB($id);
		
		redirect('index.php/estado');
	}
}
