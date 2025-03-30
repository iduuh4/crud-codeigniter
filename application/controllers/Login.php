<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index() {
        $this->load->view('autenticacao/login');
    }

	public function cadastro() {
		$this->load->view('autenticacao/cadastro');
	}
	// public function cadastrar() {
	// 	// Aqui você pode adicionar a lógica de cadastro
	// 	// Por exemplo, inserir usuário e senha no banco de dados
	// 	$usuario = $this->input->post('usuario');
	// 	$senha = $this->input->post('senha');

	// 	// Simulação de cadastro (substitua pela lógica real)
	// 	if ($usuario && $senha) {
	// 		echo "Cadastro bem-sucedido!";
	// 		// Redirecionar para a página inicial ou login
	// 		redirect('index.php/login');
	// 	} else {
	// 		echo "Erro ao cadastrar!";
	// 		// Redirecionar de volta para a página de cadastro
	// 		redirect('index.php/login/cadastro');
	// 	}
}

