<?php
	require __DIR__.'/vendor/autoload.php';
	include __DIR__ . '/includes/header.php';
	include __DIR__ . '/includes/aside.php';

	use \App\Entity\Sessao;
	$objSessao = new Sessao('sessoes');

	if (!empty($_GET['id']) && !empty($_GET['acao'])) {
		if ($_GET['acao'] === 'deletar') {
			$objSessao->deletarSessao('cod_sessao = '. $_GET['id']);
		}
		if ($_GET['acao'] === 'atualizar') {
			$objSessao->atualizarSessao('id');
		}
	}

	$sessoes = $objSessao->selectSessoesFK();


	include __DIR__ . '/includes/sessoes.php';
	include __DIR__ . '/includes/footer.php';
?>
