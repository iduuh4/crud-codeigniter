<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticar extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('UsuarioModel');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
	public function index() {
		$this->login(); // Redireciona para o método login
	}

	public function login(){
		if($this->session->userdata('logado')){
			redirect('estado'); // Redireciona para a página inicial se já estiver logado
		}

		$this->form_validation->set_rules('usuario', 'Usuário', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('autenticacao/login');
		}else{
			$usuario = $this->input->post('usuario');
			$senha = $this->input->post('senha');

			$usuario = $this->UsuarioModel->verificar_login($usuario, $senha);

			if($usuario){
				$this->session->set_userdata('logado', true);
				$this->session->set_userdata('usuario', $usuario);
				redirect('estado'); // Redireciona para a página inicial dos estados após o login
			}else{
				$this->session->set_flashdata('error', 'Usuário ou senha inválidos!'); // Armazena a mensagem de erro na sessão
				redirect('autenticar/login'); // Redireciona para a página de login
			}
		}
	}

	public function cadastro(){
		if($this->session->userdata('logado')){
			redirect('index'); // Redireciona para a página inicial se já estiver logado
		}

		// Define as regras de validação do formulário
		$this->form_validation->set_rules('usuario', 'Usuário', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		// Verifica se o formulário foi enviado
		// Se o formulário não foi enviado, carrega a view de cadastro
		if($this->form_validation->run() == FALSE){
			$this->load->view('autenticacao/cadastro');
		}else{ // Se o formulário foi enviado, processa os dados
			$dados = array(
				'usuario' => $this->input->post('usuario'),
				'senha' => $this->input->post('senha')
			);

			if($this->UsuarioModel->cadastrar($dados)){
				$this->session->set_flashdata('sucesso', 'Cadastro realizado com sucesso! Faça login.');
				redirect('autenticar/login'); // Redireciona para a página de login
			}else{
				$this->session->set_flashdata('error', 'Erro ao cadastrar!'); // Armazena a mensagem de erro na sessão
				redirect('autenticar/cadastro'); // Redireciona para a página de cadastro
			}
		}
	}

	public function sair(){
		$this->session->sess_destroy(); // Destroi a sessão
		redirect('autenticar/login'); // Redireciona para a página de login
	}

}

