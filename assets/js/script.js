function executa() {

	document.addEventListener('click', e => {
		const el = e.target;
		
		if (el.classList.contains('nav-sessoes')) {
			location.href = './sessoes.html';
		}

		if (el.classList.contains('nav-filmes')) {
			location.href = './filmes.html';
		}

		if (el.classList.contains('nav-salas')) {
			location.href = './salas.html';
		}
	});

}

executa();