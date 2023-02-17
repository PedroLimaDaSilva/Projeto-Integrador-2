<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Séries - Geek Gate</title>
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
				<main class="col-12 col-md-12 col-lg-8">
					<article>
						<h1 class="invisible">Página de Séries</h1>
						<div class="card">
							<img src="images/plagio.webp" alt="Imagem de uma mulher caindo e ao fundo o mar se curvando para cima para formar um triângulo com dois navios nas laterais" class="card-img-top">
							<div class="card-body">
								<p class="card-text">A quadrinista brasileira Mary Cagnin levantou suspeitas de que 1899, nova série da Netflix, tenha plagiado elementos centrais...</p>
								<a href="noticiaseteseries.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="d-flex flex-md-row flex-column">
							<div class="card col-lg-5 col-md-5 mt-4">
								<img src="images/crown.webp" alt="Imagem da rainha Elizabeth 2ª olhando para a direita, e no fundo um homem a sua direita e um a esquerda" class="card-img-top">
								<div class="card-body">
									<p class="card-text">5ª temporada de The Crown</p>
									<a href="noticiadoisseries.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
							<div class="card col-lg-5 offset-md-2 col-md-5 mt-4">
								<img src="images/handdois.webp" alt="Imagem do rosto da protagonista de The Handmaid's Tale, June Osborne utilizando uma roupa aia" class="card-img-top">
								<div class="card-body">
									<p class="card-text">6ª temporada de The Handmaid's Tale</p>
									<a href="noticiaseisseries.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="card my-4">
							<img src="images/wandinha.webp" alt="Imagem parcial do rosto da personagem Wandinha da família Addams, da série Wandinha da Netflix" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Wandinha: Uma série derivada do clássico Família Addams</p>
								<a href="noticiatresseries.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="card">
							<img src="images/chaves.webp" alt="À esquerda a imagem do ator Héctor Bonilla, atuando em Chaves e segurando uma xícara e à direita uma foto sua mais velho" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Morre aos 83 anos o ator Héctor Bonilla, conhecido no Brasil por Chaves</p>
								<a href="noticiaquatroseries.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
							</div>
						</div>
						<div class="card my-4">
							<img src="images/dahmer.webp" alt="Imagem de Jeffrey Dahmer usando óculos em um cenário amarelado e a sua esquerda o nome da série Dahmer Um Canibal Americano" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Dahmer: Um Canibal Americano é pertubador ao extremo</p>
								<a href="noticiacincoseries.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
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