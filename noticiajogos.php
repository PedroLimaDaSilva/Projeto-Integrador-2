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
							<h1 class="fs-4">Notícias</h1>
							<div class="d-flex flex-column">
								<a class="fs-4 mb-3 text-dark" href="noticiaumjogos.php">God Of War Ragnarok ganha título de jogo do ano pela revista Time e pela Big Conference</a>
								<a class="fs-4 mb-3 text-dark" href="noticiadoisjogos.php">DRX ganha campeonato mundial de League Of Legends</a>
								<a class="fs-4 mb-3 text-dark" href="noticiatresjogos.php">The Callisto Protocol: Novo jogo do gênero survival horror é lançado</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaquatrojogos.php">Loud ganha Valorant Champions 2022 e traz o primeiro título para o Brasil</a>
								<a class="fs-4 mb-3 text-dark" href="noticiacincojogos.php">Stray ganha mod do CJ</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaseisjogos.php">Update 3.2 chega à Genshin Impact</a>
								<a class="fs-4 mb-3 text-dark" href="noticiasetejogos.php">Goat Simulator 3: É lançado o terceiro jogo da série</a>
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