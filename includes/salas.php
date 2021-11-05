	<main>
		<h2>Salas</h2>
		<div class="acoes">
			<div class="adicionar-sala">
				<i class="add-sala fas fa-plus"></i>
				<span>ADICIONAR SALA</span>
			</div>
		</div>
		<div>
			<table>
				<thead>
					<tr>
						<th>Número da Sala</th>
						<th>Quantidade de assentos</th>
						<th>Excluir</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $salas as $sala ) { ?>
						<tr id="<?= $sala['cod_sala'] ?>">
							<td><?= $sala['numero_sala'] ?></td>
							<td><?= $sala['quantidade_assentos'] ?></td>
							<td><button class="excluir exSala fas fa-times"></button></td>
							<td><button class="editar edSala fas fa-edit"></button></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</main>
</div>	