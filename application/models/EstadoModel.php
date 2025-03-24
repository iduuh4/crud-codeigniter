<?php

class EstadoModel extends CI_Model{
	// pegando colunas da tabela do banco de dados, esse aqui seria um SELECT * FROM estados no php puro
	public $id; 
	public $cidade; 
	public $sigla; 

	public function SelecionarTodos(){
		// Faça a consulta no banco de dados, e logo após retorne o resultado
		$query = $this->db->get('estados', 100);
		return $query->result();
	}

	public function incluirDB(){
		// Pega os dados do formulário
		$campos = array(
			'cidade' => $this->input->post('cidade'),
			'sigla' => $this->input->post('sigla')
		);

		// Insere no banco de dados
		$this->db->insert('estados', $campos);
	}

	public function Selecionar($where){ //METODO GET
		//get_where é um querybuilder, igual ao SELECT * FROM estados WHERE ... o $where recebe o id no controler
		$retorno = $this->db->get_where('estados', $where);
		return $retorno->result();
	}

	public function atualizarDB($id, $dados) { //METODO POST
		// é igual um update em php
		$this->db->where('id', $id);
		//faz um update na tabela estados e adiciona na variavel $dados e irá ser usada no controller.
		return $this->db->update('estados', $dados);
	}

	public function excluirDB($id) {
		$this->db->where('id', $id); //pega o id do db e passa a condicao como parametro
		return $this->db->delete('estados');//deleta o registro da tabela estados
	}
}
?>	
