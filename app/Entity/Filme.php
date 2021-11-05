<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Filme {

	private $tabela;
	private $bancoDados;

	private $id;

	public function __construct($tabela) {
		$this->bancoDados = new Database($tabela);
		$this->tabela = $tabela;
	}

	public function getFilmes($where = null) {
		return $this->bancoDados->select($where)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getFilme($where = null) {
		return $this->bancoDados->select($where)->fetch(PDO::FETCH_ASSOC);
	}

	public function adicionarFilme($filme) {
		$this->id = $this->bancoDados->insert($filme);
		header('location: ./filmes.php');
	}

	public function deletarFilme($id) {
		$bancoSessoes = new Sessao('sessoes');
		$registros = $bancoSessoes->getSessoes("cod_filme = $id");
		!empty($registros) ? $bancoSessoes->deletarSessao("cod_filme = $id") : '';
		$this->bancoDados->delete("cod_filme = $id");
	}

	public function atualizarFilme($id, $valores) {
		$this->bancoDados->update('cod_filme = '. $id, $valores);
	}
}

?>