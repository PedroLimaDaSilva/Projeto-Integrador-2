<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notícias - Geek Gate</title>
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
					<main class="col-lg-8">
						<article>
							<h1 class="fs-4">Update 3.2 chega à Genshin Impact</h1>
							<div class="d-flex flex-column">
								<img class="mb-3" src="images/genshin.webp" alt="Imagem da personagem Nahida de Genshin Impact esticando a mão para cima à frente de um fundo verde e a esquerda o nome do jogo em marrom">
								<p>Chegou ao Genshin Impact o update 3.2 no dia 2 de novembro, tal que tem como objetivo trazer novos personagens e banners, além da conclusão da Sumeru Archon Quest.</p>
								<p>O update traz novidades, como as personagens Nahida, que é capaz de ler a mente de outros personagens e é do tipo Dendro, e Layla, uma astróloga que possui distúrbios de sono e é do gênero Cryo, além dos novos chefes Balladeer e Dendro Hypostasis. Haverá ainda quatro eventos, sendo dois novos e dois já conhecidos.</p>
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