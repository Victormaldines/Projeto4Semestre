(function() {

	document.addEventListener('click', e => {
		const el = e.target;
		
		// Caminhos
		if (el.classList.contains('cinema')) {
			location.href = './index.php';
		}

		if (el.classList.contains('nav-sessoes')) {
			location.href = './sessoes.php?pagina=sessao';
		}

		if (el.classList.contains('nav-filmes')) {
			location.href = './filmes.php?pagina=filme';
		}

		if (el.classList.contains('nav-salas')) {
			location.href = './salas.php?pagina=sala';
		}

		if (el.classList.contains('add-filme')) {
			location.href = './adicionarFilme.php';
		}

		if (el.classList.contains('add-sala')) {
			location.href = './adicionarSala.php'
		}

		if (el.classList.contains('add-sessao')) {
			location.href = './adicionarSessao.php';
		}
		//Excluir / Editar
		if (el.classList.contains('excluir')) {
			idEl = el.parentElement.parentElement.id;
			
			if (el.classList.contains('exFilme')) {
				exclui(idEl, 'filmes')
			}

			if (el.classList.contains('exSala')) {
				exclui(idEl, 'salas');
			}

			if (el.classList.contains('exSessao')) {
				exclui(idEl, 'sessoes')
			}
		}

		if (el.classList.contains('editar')) {
			idEl = el.parentElement.parentElement.id;
			
			if (el.classList.contains('edFilme')) {
				edita(idEl, 'Filme')
			}

			if (el.classList.contains('edSala')) {
				edita(idEl, 'Sala');
			}

			if (el.classList.contains('edSessao')) {
				edita(idEl, 'Sessao')
			}
		}

	});
})();

function exclui(idEl, pagina) {
	displayCaixa('flex');
	confirmaExcluir(idEl).then(id => {
		location.href = `./${pagina}.php?id=${id}&acao=deletar`;
		displayCaixa('none');
	}).catch(response => {
		displayCaixa('none');
	});
}

function edita(idEl, pagina) {
	location.href = `./adicionar${pagina}.php?id=${idEl}`;
}

function displayCaixa(display) {
	const caixaConfirmar = document.querySelector('.confirmar');
	caixaConfirmar.style.display = display;
}

function confirmaExcluir(id) {
	return new Promise((resolve,reject) => {
		document.querySelector('.caixa-sim').onclick = () => {
			resolve(id);
		};

		document.querySelector('.caixa-nao').onclick = () => {
			reject(false);
		}
	});
}