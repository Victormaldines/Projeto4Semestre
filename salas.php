<?php
	require __DIR__.'/vendor/autoload.php';
	include __DIR__ . '/includes/header.php';
	include __DIR__ . '/includes/aside.php';

	use \App\Entity\Sala;
	$objSala = new Sala('salas');

	if (!empty($_GET['id']) && !empty($_GET['acao'])) {
		if ($_GET['acao'] === 'deletar') {
			$objSala->deletarSala($_GET['id']);
		}
		if ($_GET['acao'] === 'atualizar') {
			$objSala->atualizarSala('id');
		}
	}

	$salas = $objSala->getSalas();

	include __DIR__ . '/includes/salas.php';
	include __DIR__ . '/includes/footer.php';
?>
