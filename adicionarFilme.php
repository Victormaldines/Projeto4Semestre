<?php
	require __DIR__.'/vendor/autoload.php';
	include __DIR__ . '/includes/header.php';
	include __DIR__ . '/includes/aside.php';

	use \App\Entity\Filme;

	$filme = new Filme('filmes');

	if (empty($_GET['id'])) {
		if (
			!(empty($_POST['titulo'])) &&
			!(empty($_POST['duracao'])) &&
			!(empty($_POST['descricao']))
		) {
			$filme->adicionarFilme([
				'titulo' => $_POST['titulo'],
				'duracao' => $_POST['duracao'],
				'descricao' => $_POST['descricao']
			]);
		}
	} else {
		$filmeEditar = $filme->getFilme("cod_filme = " . $_GET['id']);
		if (isset($_GET['acao']) && $_GET['acao'] === 'atualizar') {
			$filme->atualizarFilme($_GET['id'], $_POST);
			header('location: ./filmes.php');
		}
	}

	include __DIR__ . '/includes/adicionarFilme.php';
	include __DIR__ . '/includes/footer.php';
?>
