<aside>
	<nav>
		<?php $_GET['pagina'] = isset($_GET['pagina']) ? $_GET['pagina'] : '' ?>
		<div class="nav-sessoes <?= $_GET['pagina'] === 'sessao' ? 'active' : '' ?>">Sessões</div>
		<div class="nav-filmes <?= $_GET['pagina'] === 'filme' ? 'active' : '' ?>">Filmes</div>
		<div class="nav-salas <?= $_GET['pagina'] === 'sala' ? 'active' : '' ?>">Salas</div>
	<nav>
</aside>