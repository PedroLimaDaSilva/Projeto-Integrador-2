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
				<div class="col-lg-2 col-md-12 mt-2"><?php include 'subnavanimes.html'; ?></div>
					<main class="col-lg-8">
						<article>
							<h1 class="fs-4">Notícias</h1>
							<div class="d-flex flex-column">
								<a class="fs-4 mb-3 text-dark" href="noticiaumanimes.php">2° Temporada de Jujutsu Kaisen! Saiba o que esperar deste anime que encantou todos os entusiastas de animes</a>
								<a class="fs-4 mb-3 text-dark" href="noticiadoisanimes.php">5 animes para matar a saudade, veja o que já te marcou e reviva essa nostalgia que aquece o coração</a>
								<a class="fs-4 mb-3 text-dark" href="noticiatresanimes.php">3 animes que vão te deixar de cabelo em pé, o melhor do terror e suspense</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaquatroanimes.php">Aya e a Bruxa o primeiro filme dos studios Ghibli a ser lançado em 3D</a>
								<a class="fs-4 mb-3 text-dark" href="noticiacincoanimes.php">O FIM ESTÁ PRÓXIMO! Calma estamos falando de One piece</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaseisanimes.php">Elevando o cosmo para um novo nível</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaseteanimes.php">A febre da serra elétrica</a>
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