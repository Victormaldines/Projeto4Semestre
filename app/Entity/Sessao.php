<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Sessao {

	private $tabela;
	private $bancoDados;

	private $id;

	public function __construct($tabela) {
		$this->bancoDados = new Database($tabela);
		$this->tabela = $tabela;
	}

	public function getSessoes($where = null) {
		return $this->bancoDados->select($where)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getSessao($where = null) {
		return $this->bancoDados->select($where)->fetch(PDO::FETCH_ASSOC);
	}

	public function selectSessoesFK() {
		return $this->bancoDados->selectSessoesFK();
	}

	public function adicionarSessao($sessao) {
		$this->id = $this->bancoDados->insert($sessao);
		header('location: ./sessoes.php');
	}

	public function deletarSessao($where) {
		$this->bancoDados->delete($where);
	}

	public function atualizarSessao($id, $valores) {
		$this->bancoDados->update('cod_sessao = '. $id, $valores);
	}
}

?>