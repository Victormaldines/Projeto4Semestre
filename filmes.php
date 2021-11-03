<?php
	require __DIR__.'/vendor/autoload.php';
	include __DIR__ . '/includes/header.php';
	include __DIR__ . '/includes/aside.php';

	use \App\Entity\Filme;
	$objFilme = new Filme('filmes');

	if (!empty($_GET['id']) && !empty($_GET['acao'])) {
		if ($_GET['acao'] === 'deletar') {
			$objFilme->deletarFilme($_GET['id']);
		}
		if ($_GET['acao'] === 'atualizar') {
			$objFilme->atualizarFilme('id');
		}
	}

	$filmes = $objFilme->getFilmes();

	include __DIR__ . '/includes/filmes.php';
	include __DIR__ . '/includes/footer.php';
?>
