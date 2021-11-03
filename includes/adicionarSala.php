	<main>
		<h2 style="text-align:center">Adicionar Sala</h2>
		<div>
			<form action="adicionarSala.php?id=<?= isset($_GET['id']) ?  $_GET['id'].'&acao=atualizar' : '' ?>" method="POST">
				<div>
					<label for="numero-sala">Número da Sala:</label>
					<input name="numero-sala" id="numero-sala" type="text"
						value="<?php
							$numero = isset($salaEditar['numero_sala']) ? $salaEditar['numero_sala'] : '';
							echo $numero;
						?>"
					>
				</div>
				<div>
					<label for="qtdAssentos">Quantidade de Assentos:</label>
					<input name="qtdAssentos" id="qtdAssentos" type="number" min="0"
						value= "<?php
							$qtdAssentos = isset($salaEditar['quantidade_assentos']) ? $salaEditar['quantidade_assentos'] : '';
							echo $qtdAssentos;
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