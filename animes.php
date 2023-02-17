<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Animes - Geek Gate</title>
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
				<main class="col-12 col-md-12 col-lg-8">
					<article>
						<h1 class="invisible">Página de Animes</h1>
						<div class="card">
							<img src="images/chain.webp" alt="Personagem principal do anime Chainsaw Man, é um homem com uma cabeça que sai uma serra elétrica" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Sabemos que no mundo dos animes cada hora temos um anime incrível surgindo do absoluto nada e virando febre, a onda da vez é o anime Chainsaw man, que mal lançou e já...</p>
								<a href="noticiaseteanimes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="d-flex flex-md-row flex-column">
							<div class="card col-lg-5 col-md-5 mt-4">
								<img src="images/relembrar.webp" alt="Foto dos personagens Kirito e Asuna um de costas para o outro com o nome do anime Sword Art Online no meio" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Animes para matar a saudade</p>
									<a href="noticiadoisanimes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
							<div class="card col-lg-5 offset-md-2 col-md-5 mt-4">
								<img src="images/cavaleiros.webp" alt="Seiya de Pegasus do anime Cavaleiros do Zodíaco porem em sua versão live action" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Cavaleiros do Zodíaco</p>
									<a href="noticiaseisanimes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="card my-4">
							<img src="images/another.webp" alt="Uma garota de tapa olho deitada sobre várias flores roxas" class="card-img-top">
							<div class="card-body">
								<p class="card-text">3 animes que vão te deixar de cabelo em pé, o melhor do terror e suspense</p>
								<a href="noticiatresanimes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="card">
							<img src="images/ayag.webp" alt="Aya do filme Aya e a Bruxa, ela está usando um chapéu de palha e sorrindo" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Aya e a Bruxa o primeiro filme dos studios Ghibli a ser lançado em 3D</p>
								<a href="noticiaquatroanimes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="card my-4">
							<img src="images/onepiece.webp" alt="Todos os personagens principais do anime One Piece" class="card-img-top">
							<div class="card-body">
								<p class="card-text">O FIM ESTÁ PRÓXIMO! Calma, estamos falando de One Piece</p>
								<a href="noticiacincoanimes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
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