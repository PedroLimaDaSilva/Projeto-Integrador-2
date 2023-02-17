<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Geek Gate</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link href="css/index.css" rel="stylesheet">
		<link href="images/sigla.webp" rel="icon">
    </head>
    <body>
		<?php include 'nav.html'; ?>
	
		<main class="offset-sm-3 offset-md-2">
			<article class="container pt-4">
				<h1 class="invisible">Página principal do site/Home</h1>
				<h2 class="fs-4 espacamento">Assuntos do momento</h2>
				<section class="carousel slide" id="carouselExampleCaptions">
					<h2 class="invisible">Seção do carrosel principal da página da home</h2>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/gowragnarok.webp" alt="Imagem da capa do jogo God Of War Ragnarok com os personagens Kratos e Atreus no centro sobre um rio congelado com o nome do jogo acima deles" class="col-12">
							<div class="carousel-caption">
								<a class="text-white text-decoration-none" href="noticiaumjogos.php">God Of War Ragnarok ganha título de jogo do ano pela revista Time e pela Big Conference</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/witcher.webp" alt="Imagem do ator Henry Cavill como o personagem Geralt de Rivia de The Witcher" class="col-12">
							<div class="carousel-caption">
								<a class="text-white text-decoration-none" href="noticiaumseries.php">The Witcher: Henry Cavill deixa a série após três temporadas e volta a interpretar o Superman</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/godzilla.webp" alt="Imagem do Godzilla do filme Godzilla 2: Rei dos Monstros, de lado atirando um raio para cima" class="col-12">
							<div class="carousel-caption">
								<a class="text-white text-decoration-none" href="noticiaumfilmes.php">Godzilla: Produtora anúncia novo filme de Godzilla para 2023</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/itadori.webp" alt="A foto do personagem Itadori de Jujutsu Kaisen sorrindo, um garoto branco de cabelo rosa" class="col-12">
							<div class="carousel-caption">
								<a class="text-white bg-dark text-decoration-none" href="noticiaumanimes.php">2° Temporada de Jujutsu Kaisen! Saiba o que esperar deste anime que encantou todos os entusiastas de animes</a>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
					</button>
				</section>

				<section class="d-flex flex-md-row flex-column my-4">
					<h2 class="invisible">Primeira seção de notícias</h2>
					<div class="row">
						<div class="col-12 col-md-4 mb-4">
							<div class="card">
								<img src="images/anotherdois.webp" alt="Uma garota de tapa olho deitada sobre várias flores roxas" class="card-img-top">
								<div class="card-body">
									<p class="card-text">3 animes que vão te deixar de cabelo em pé, o melhor do terror e suspense</p>
									<a href="noticiatresanimes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 mb-4">
							<div class="card">
								<img src="images/wanda.webp" alt="Imagem do rosto da personagem Wandinha da família Addams, da série Wandinha da Netflix" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Wandinha: Uma série derivada do clássico Familia Addams</p>
									<a href="noticiatresseries.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 mb-4">
							<div class="card">
								<img src="images/guardioestres.webp" alt="Imagem dos personagens do filme Guardiões da Galáxia volume 3" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Com tom de despedida, novo trailer de Guardiões da Galáxia vol. 3</p>
									<a href="noticiatresfilmes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="d-flex flex-md-row flex-column">
					<h2 class="invisible">Segunda seção de notícias</h2>
					<div class="row">
						<div class="col-12 col-md-4 mb-4">
							<div class="card">
								<img src="images/genshincard.webp" alt="Imagem da personagem Nahida de Genshin Impact esticando a mão para cima à frente de um fundo verde" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Update 3.2 chega à Genshin Impact</p>
									<a href="noticiaseisjogos.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 mb-4">
							<div class="card">
								<img src="images/furiosos.webp" alt="Imagem dos personagens Dominic Toretto à direita e Let à esquerda com fumaça azul, preta, verde e vermelha subindo ao fundo" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Novo Velozes e Furiosos</p>
									<a href="noticiaseisfilmes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 mb-4">
							<div class="card">
								<img src="images/cavaleiros.webp" alt="Seiya de Pegasus do anime Cavaleiros do Zodíaco porém em sua versão live action" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Cavaleiros do Zodíaco</p>
									<a href="noticiaseisanimes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>
			
			<aside class="container">
				<section class="carousel slide" id="carouselExampleCaptions2">
					<h2 class="invisible">Seção do carrosel principal da página da home</h2>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/chaves.webp" alt="À esquerda a imagem do ator Héctor Bonilla, atuando em Chaves e segurando uma xícara e à direita uma foto sua mais velho" class="col-12">
							<div class="carousel-caption">
								<a class="text-white text-decoration-none" href="noticiaquatroseries.php">Morre aos 83 anos o ator Héctor Bonilla, conhecido no Brasil por Chaves</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/ayag.webp" alt="Aya do filme Aya e a Bruxa, ela está usando um chapéu de palha e sorrindo" class="col-12">
							<div class="carousel-caption">
								<a class="text-white text-decoration-none" href="noticiaquatroanimes.php">Aya e a Bruxa o primeiro filme dos studios Ghibli a ser lançado em 3D</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/formiga.webp" alt="Imagem do Homem-Formiga à esquerda e da Vesta à direita com o nome do filme Ant-man and the Wasp Quantumania abaixo" class="col-12">
							<div class="carousel-caption">
								<a class="text-white text-decoration-none" href="noticiaquatrofilmes.php">Novo Homem-Formiga e a Vespa: As informações sobre o filme</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/valorantloud.webp" alt="Imagens dos membros da Loud erguendo o troféu da Valorant Champions com um bicho de pelúcia dentro da taça" class="col-12">
							<div class="carousel-caption">
								<a class="text-white text-decoration-none" href="noticiaquatrojogos.php">Loud ganha Valorant Champions 2022 e traz o primeiro título para o Brasil</a>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
					</button>
				</section>
			
				<section class="d-flex flex-md-row flex-column my-4">
					<h2 class="invisible">Terceira seção de notícias</h2>
					<div class="row">
						<div class="col-12 col-md-4">
							<div class="card">
								<img src="images/choque.webp" alt="Imagem do personagem dos quadrinhos Super Choque" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Ator do filme do Super Choque</p>
									<a href="noticiadoisfilmes.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="card">
								<img src="images/crown.webp" alt="Imagem da rainha Elizabeth 2ª olhando para a direita, e no fundo um homem a sua direita e um a esquerda" class="card-img-top">
								<div class="card-body">
									<p class="card-text">5ª temporada de The Crown</p>
									<a href="noticiadoisseries.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="card">
								<img src="images/drxcard.webp" alt="Imagem do time da DRX erguendo o troféu do mundial de League Of Legends com a plateia ao fundo" class="card-img-top">
								<div class="card-body">
									<p class="card-text">DRX ganha mundial de LOL</p>
									<a href="noticiadoisjogos.php" class="text-white primary-color botao rounded-3 text-decoration-none">Leia mais</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</aside>
		</main>
	
        <?php include 'footer.html'; ?>
		<script src="js/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>