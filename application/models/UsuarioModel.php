<?php

class UsuarioModel extends CI_Model{
	// Carregar o banco de dados
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function cadastrar($dados){
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		return $this->db->insert('usuarios', $dados);
	}

	public function verificar_login($usuario, $senha){
		$this->db->where('usuario', $usuario);
		$usuario_db = $this->db->get('usuarios')->row();

		if($usuario_db && password_verify($senha, $usuario_db->senha)){
			// Se o usuário existe e a senha está correta
			return $usuario_db;
		}
		return false;
	}
	// método para verificar se o usuário já existe
    public function usuario_existe($usuario){
        $this->db->where('usuario', $usuario);
        return $this->db->get('usuarios')->num_rows() > 0;
    }
}
?>	
