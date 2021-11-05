<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Sala {

	private $tabela;
	private $bancoDados;

	private $id;

	public function __construct($tabela) {
		$this->bancoDados = new Database($tabela);
		$this->tabela = $tabela;
	}

	public function getSalas($where = null) {
		return $this->bancoDados->select($where)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getSala($where = null) {
		return $this->bancoDados->select($where)->fetch(PDO::FETCH_ASSOC);
	}

	public function adicionarSala($sala) {
		$this->id = $this->bancoDados->insert($sala);
		header('location: ./salas.php');
	}

	public function deletarSala($id) {
		$bancoSessoes = new Sessao('sessoes');
		$registros = $bancoSessoes->getSessoes("cod_sala = $id");
		!empty($registros) ? $bancoSessoes->deletarSessao("cod_sala = $id") : '';
		$this->bancoDados->delete("cod_sala = $id");
	}

	public function atualizarSala($id, $valores) {
		$this->bancoDados->update('cod_sala = '. $id, $valores);
	}
}

?>