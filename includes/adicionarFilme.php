	<main>
		<h2 style="text-align:center">Adicionar Filme</h2>
		<div>
			<form action="adicionarFilme.php?id=<?= isset($_GET['id']) ?  $_GET['id'].'&acao=atualizar' : '' ?>" method="POST">
				<div>
					<label for="titulo">Título:</label>
					<?php  ?>
					<input name="titulo" id="titulo"type="text"
						value = "<?php
							$titulo = isset($filmeEditar['titulo']) ? $filmeEditar['titulo'] : '';
							echo $titulo;
						?>"
					>
				</div>
				<div>
					<label for="duracao">Duração:</label>
					<input name="duracao" id="duracao" type="time"
						value = "<?php
							$duracao = isset($filmeEditar['duracao']) ? $filmeEditar['duracao'] : '';
							echo $duracao;
						?>"
					>
				</div>
				<div>
					<label for="duracao">Descrição:</label>
					<input name="descricao" id="descricao" type="text"
						value = "<?php
							$descricao = isset($filmeEditar['descricao']) ? $filmeEditar['descricao'] : '';
							echo $descricao;
						?>"
					>
				</div>
				<div>
					<input type="submit" value="pronto">
				</div>
			</form>
		</div>
	</main>
</div>	