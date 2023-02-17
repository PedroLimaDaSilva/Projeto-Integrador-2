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
							<h1 class="fs-4">Notícias</h1>
							<div class="d-flex flex-column">
								<a class="fs-4 mb-3 text-dark" href="noticiaumfilmes.php">Godzilla: Produtora anúncia novo filme de Godzilla para 2023</a>
								<a class="fs-4 mb-3 text-dark" href="noticiadoisfilmes.php">Super Choque: Quem é o ator escalado para viver o herói nos cinemas?</a>
								<a class="fs-4 mb-3 text-dark" href="noticiatresfilmes.php">Com tom de despedida, a emoção foi forte para o diretor escrever Guardiões da Galáxia vol. 3</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaquatrofilmes.php">Novo Homem-Formiga e a Vespa: As informações sobre o filme</a>
								<a class="fs-4 mb-3 text-dark" href="noticiacincofilmes.php">Shazam 2: Diretor anuncia que filme está finalizado, o que podemos esperar?</a>
								<a class="fs-4 mb-3 text-dark" href="noticiaseisfilmes.php">Velozes e Furiosos 10 será um dos filmes mais caros da história</a>
								<a class="fs-4 mb-3 text-dark" href="noticiasetefilmes.php">Transformers 7: Sinopse divulgada, quais as novidades da história?</a>
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