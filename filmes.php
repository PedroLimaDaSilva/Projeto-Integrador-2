<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Filmes - Geek Gate</title>
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
				<main class="col-12 col-md-12 col-lg-8">
					<article>
						<h1 class="invisible">Página de Filmes</h1>
						<div class="card">
							<img src="images/transformers.webp" alt="Imagem dos personagens de Transformers 5 Optimus Prime e Bumblebee lutando entre si em meio ao oceano" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Um novo filme da franquia de sucesso Transformers está por vir, o sétimo filme está intulado como ‘Transformers 7: O despertar das Feras’.</p>
								<a href="noticiasetefilmes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="d-flex flex-md-row flex-column">
							<div class="card col-lg-5 col-md-5 mt-4">
								<img src="images/choque.webp" alt="Imagem do personagem dos quadrinhos Super Choque" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Ator do filme do Super Choque</p>
									<a href="noticiadoisfilmes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
							<div class="card col-lg-5 offset-md-2 col-md-5 mt-4">
								<img src="images/furiosos.webp" alt="Imagem dos personagens Dominic Toretto à direita e Let à esquerda com fumaça azul, preta, verde e vermelha subindo ao fundo" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Novo Velozes e Furiosos</p>
									<a href="noticiaseisfilmes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="card my-4">
							<img src="images/guardiao.webp" alt="Imagem dos personagens do filme Guardiões da Galáxia volume 3 com nome do filme abaixo" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Com tom de despedida, a emoção foi forte para o diretor escrever Guardiões da Galáxia vol. 3</p>
								<a href="noticiatresfilmes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="card">
							<img src="images/formiga.webp" alt="Imagem do Homem-Formiga à esquerda e da Vesta à direita com o nome do filme Ant-man and the Wasp Quantumania abaixo" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Novo Homem-Formiga e a Vespa: As informações sobre o filme</p>
								<a href="noticiaquatrofilmes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="card my-4">
							<img src="images/shazam.webp" alt="Imagem dos seis Shazams de Shazam 2 no meio de uma estrada com bombeiros ao fundo" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Shazam 2: Diretor anuncia que filme está finalizado, o que podemos esperar?</p>
								<a href="noticiacincofilmes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
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