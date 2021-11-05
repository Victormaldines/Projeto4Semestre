	<main>
		<h2>Sessões</h2>
		<div class="acoes">
			<div class="adicionar-filme">
				<i class="add-sessao fas fa-plus"></i>
				<span >ADICIONAR SESSÃO</span>
			</div>
		</div>
		<div>
			<table>
				<thead>
					<tr>
						<th>Sessão</th>
						<th>Filme</th>
						<th>Sala</th>
						<th>Começa às</th>
						<th>Termina às</th>
						<th>Preço</th>
						<th>Excluir</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($sessoes as $sessao) { ?>
						<tr id="<?= $sessao['cod_sessao'] ?>">
							<td><?= $sessao['cod_sessao'] ?></td>
							<td><?= $sessao['titulo'] ?></td>
							<td><?= $sessao['numero_sala'] ?></td>
							<td><?= $sessao['inicio'] ?></td>
							<td><?= $sessao['fim'] ?></td>
							<td><strong>R$</strong> <?= $sessao['preco'] ?></td>
							<td><button class="excluir exSessao fas fa-times"></button></td>
							<td><button class="editar edSessao fas fa-edit"></button></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</main>
</div>	