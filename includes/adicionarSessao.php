	<main>
		<h2 style="text-align:center">Adicionar Sessao</h2>
		<div>
			<form action="adicionarSessao.php?id=<?= isset($_GET['id']) ?  $_GET['id'].'&acao=atualizar' : '' ?>" method="POST">
				<div>
					<label for="codFilme">Nome do Filme:</label>
					<select name="codFilme" id="codFilme">
						<option value="0">Escolha</option>
						<?php foreach ($filmes as $filme) { ?>
							<option value="<?= $filme['cod_filme'] ?>"
								<?php if (!empty($_GET['id'])) { ?>
									<?= $filme['cod_filme'] === $sessaoEditar['cod_filme'] ? 'selected' : ''  ?>
								<?php } ?>
							>
								<?= $filme['titulo'] ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div>
					<label for="codSala">Número da Sala:</label>

					<select name="codSala" id="codSala">
						<option value="0">Escolha</option>

						<?php foreach ($salas as $sala) {?>
							<option value="<?= $sala['cod_sala'] ?>"
								<?php if (!empty($_GET['id'])) { ?>
									<?= $sala['cod_sala'] === $sessaoEditar['cod_sala'] ? 'selected' : ''?>
								<?php } ?>
							>
								<?= $sala['numero_sala'] ?>
							</option>
						<?php } ?>


					</select>
				</div>
				<div class="duracao">
					<div class="duracao-inicio">
						<label for="inicio">Início:</label>
						<input name="inicio" id="inicio" type="time"
							value="<?php
								$inicio = isset($sessaoEditar['inicio']) ? $sessaoEditar['inicio'] : '';
								echo $inicio;
							?>"
						>
					</div>
					<div class="duracao-fim">
						<label for="fim">Fim:</label>
						<input name="fim" id="fim" type="time"
							value="<?php
								$fim = isset($sessaoEditar['fim']) ? $sessaoEditar['fim'] : '';
								echo $fim;
							?>"
						>
					</div>
				</div>
				<div>
					<label for="preco">Preço (R$):</label>
					<input name="preco" id="preco" type="number" step=".5" placeholder="R$" min="0"
						value="<?php
							$preco = isset($sessaoEditar['preco']) ? $sessaoEditar['preco'] : '';
							echo $preco;
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