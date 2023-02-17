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
				<div class="col-lg-2 col-md-12 mt-2"><?php include 'subnavfilmes.html'; ?></div>
					<main class="col-lg-8">
						<article>
							<h1 class="fs-4">Godzilla: Produtora anúncia novo filme de Godzilla para 2023</h1>
							<div class="d-flex flex-column">
								<img class="mb-3" src="images/godzilla.webp" alt="Imagem do Godzilla do filme Godzilla 2: Rei dos Monstros, de lado atirando um raio para cima">
								<p>Próximo de completar o aníversário de 70 anos do primeiro filme, a produtora Toho anúncia um novo filme da franquia.</p>
								<p>Ainda sem detalhes da nova produção, uma informação importante é que o diretor Takashi Yamazaki que está participando dessa novo projeto.</p>
								<p>Com a previsão de lançamento para o final do segundo semestre 2023, as informações já vão deixando os fãs da franquia empolgados e anciosos. Assim como os demais filmes de Godzilla não faltará muita emoção, suspense, lutas e muita arte cinematográfica.</p>
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