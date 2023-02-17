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
				<div class="col-lg-2 col-md-12 mt-2"><?php include 'subnavseries.html'; ?></div>
					<main class="col-lg-8">
						<article>
							<h1 class="fs-4">Notícias</h1>
							<div class="d-flex flex-column">
								<a class="fs-4 mb-3 text-dark" href="noticiaumseries.php">The Witcher: Henry Cavill deixa a série após três temporadas e volta a interpretar o Superman</a>
								<a class="fs-4 mb-3 text-dark" href="noticiadoisseries.php">The Crown : Crise na família real com o fim do casamento entre Charles e lady Diana é o tema da 5° temporada</a>
								<a class="fs-4 mb-3 text-dark" href="noticiatresseries.php">Wandinha: Uma série derivada do clássico Família Addams</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaquatroseries.php">Morre aos 83 anos o ator Héctor Bonilla, conhecido no Brasil por Chaves</a>
								<a class="fs-4 mb-3 text-dark" href="noticiacincoseries.php">Dahmer: Um Canibal Americano é pertubador ao extremo</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaseisseries.php">The Hand Maid’s Tale: Sexta temporada será a última da série</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaseteseries.php">Suspeita de Plágio</a>
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