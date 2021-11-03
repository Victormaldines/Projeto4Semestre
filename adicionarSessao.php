<?php
	require __DIR__.'/vendor/autoload.php';
	include __DIR__ . '/includes/header.php';
	include __DIR__ . '/includes/aside.php';

	use \App\Entity\Sessao;
	use \App\Entity\Filme;
	use \App\Entity\Sala;

	$sessao = new Sessao('sessoes');

	$filme = new Filme('filmes');
	$filmes = $filme->getFilmes();

	$sala = new Sala('salas');
	$salas = $sala->getSalas();

	if (empty($_GET['id'])) {
		if (
			!(empty($_POST['codFilme'])) &&
			!(empty($_POST['codSala'])) &&
			!(empty($_POST['inicio'])) &&
			!(empty($_POST['fim'])) &&
			!(empty($_POST['preco']))
		) {
			$sessao->adicionarSessao([
				'cod_filme' => $_POST['codFilme'],
				'cod_sala' => $_POST['codSala'],
				'inicio' => $_POST['inicio'],
				'fim' => $_POST['fim'],
				'preco' => $_POST['preco']
			]);
		}
	} else {
		$sessaoEditar = $sessao->getSessao("cod_sessao = " . $_GET['id']);
		if (isset($_GET['acao']) && $_GET['acao'] === 'atualizar') {
			$sessao->atualizarSessao($_GET['id'], [
				'cod_filme' => $_POST['codFilme'],
				'cod_sala' => $_POST['codSala'],
				'inicio' => $_POST['inicio'],
				'fim' => $_POST['fim'],
				'preco' => $_POST['preco']
			]);
			header('location: ./sessoes.php');
		}
	}


	include __DIR__ . '/includes/adicionarSessao.php';
	include __DIR__ . '/includes/footer.php';
?>
