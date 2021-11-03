<?php
	require __DIR__.'/vendor/autoload.php';
	include __DIR__ . '/includes/header.php';
	include __DIR__ . '/includes/aside.php';

	use \App\Entity\Sala;

	$sala = new Sala('salas');

	if (empty($_GET['id'])) {
		if (
			!(empty($_POST['numero-sala'])) &&
			!(empty($_POST['qtdAssentos']))
		) {
			$sala->adicionarSala([
				'numero_sala' => $_POST['numero-sala'],
				'quantidade_assentos' => $_POST['qtdAssentos']
			]);

		}
	} else {
		$salaEditar = $sala->getSala("cod_sala = " . $_GET['id']);
		if (isset($_GET['acao']) && $_GET['acao'] === 'atualizar') {
			$sala->atualizarSala($_GET['id'], [
				'numero_sala' => $_POST['numero-sala'],
				'quantidade_assentos' => $_POST['qtdAssentos']
			]);
			header('location: ./salas.php');
		}
	}

	include __DIR__ . '/includes/adicionarSala.php';
	include __DIR__ . '/includes/footer.php';
?>
