<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jogos - Geek Gate</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="css/index.css" rel="stylesheet">
	<link href="images/sigla.webp" rel="icon">
</head>
<body>
	<?php include 'nav.html'; ?>

	<div class="offset-sm-3 offset-md-2 pt-4 espacamento">
		<div class="container">
			<div class="d-flex flex-lg-row flex-column">
				<div class="col-lg-2 col-md-12 mt-2"><?php include 'subnavjogos.html'; ?></div>
				<main class="col-12 col-md-12 col-lg-8">
					<article>
						<h1 class="invisible">Página de Jogos</h1>
						<div class="card">
							<img src="images/goat.webp" alt="Imagem do jogo Goat Simulator 3 com o nome do jogo no meio e atrás três cabras, em um campo verde com uma árvores em cada canto" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Saiu o terceiro jogo da franquia Goat Simulator neste dia 17 de novembro. Jogo desenvolvido pela Coffee Stain North, o jogo traz a grande novidade de poder ser jogado em até quatro jogadores, tornando a experiência ainda mais divertida e caótica. Foi afirmado pelos desenvolvedores que o mapa é 18 vezes maior que o primeiro jogo da série e além disso...</p>
								<a href="noticiasetejogos.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="d-flex flex-md-row flex-column">
							<div class="card col-lg-5 col-md-5 mt-4">
								<img src="images/drxcard.webp" alt="Imagem do time da DRX erguendo o troféu do mundial de League Of Legends com a plateia ao fundo" class="card-img-top">
								<div class="card-body">
									<p class="card-text">DRX ganha mundial de LOL</p>
									<a href="noticiadoisjogos.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
							<div class="card col-lg-5 offset-md-2 col-md-5 mt-4">
								<img src="images/genshincard.webp" alt="Imagem da personagem Nahida de Genshin Impact esticando a mão para cima à frente de um fundo verde" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Update 3.2 chega à Genshin Impact</p>
									<a href="noticiaseisjogos.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="card my-4">
							<img src="images/callisto.webp" alt="Imagem de um homem caído de joelhos vestido em um traje futurista com o nome The Callisto Protocol escrito a sua esquerda" class="card-img-top">
							<div class="card-body">
								<p class="card-text">The Callisto Protocol: Novo jogo do gênero survival horror é lançado</p>
								<a href="noticiatresjogos.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="card">
							<img src="images/valorantloud.webp" alt="Imagens dos membros da Loud erguendo o troféu da Valorant Champions com um bicho de pelúcia dentro da taça" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Loud ganha Valorant Champions 2022 e traz o primeiro título para o Brasil</p>
								<a href="noticiaquatrojogos.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="card my-4">
							<img src="images/stray.webp" alt="Imagem de um gato usando uma mochila com fundo vermelho a esquerda e do mod do CJ aplicado ao gato na direita sobre um gramado" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Stray ganha mod do CJ</p>
								<a href="noticiacincojogos.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
					</article>
				</main>
				<div class="col-lg-2 col-md-12"><?php include 'veja.html'; ?></div>
			</div>
		</div>
	</div>
	
	<?php include 'footer.html'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>