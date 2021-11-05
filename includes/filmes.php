	<main>
		<h2>Filmes</h2>
		<div class="acoes">
			<div class="adicionar-filme">
				<i class="add-filme fas fa-plus"></i>
				<span>ADICIONAR FILME</span>
			</div>
		</div>
		<div>
			<table>
				<thead>
					<tr>
						<th>Título</th>
						<th>Duração</th>
						<th>Descrição</th>
						<th>Excluir</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($filmes as $filme) { ?>
						<tr id="<?= $filme['cod_filme'] ?>">
							<td><?= $filme['titulo'] ?></td>
							<td><?= $filme['duracao'] ?></td>
							<td><?= $filme['descricao'] ?></td>
							<td><button class="excluir exFilme fas fa-times"></button></td>
							<td><button class="editar edFilme fas fa-edit"></button></td>
						</tr>
					<?php } ?>
					
				</tbody>
			</table>
		</div>
	</main>
</div>	