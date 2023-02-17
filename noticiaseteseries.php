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
							<h1 class="fs-4">Suspeita de Plágio</h1>
							<div class="d-flex flex-column">
								<img class="mb-3" src="images/plagio.webp" alt="Imagem de uma mulher caindo e ao fundo o mar se curvando para cima para formar um triângulo com dois navios nas laterais">
								<p>A quadrinista brasileira Mary Cagnin levantou suspeitas de que 1899, nova série da Netflix, tenha plagiado elementos centrais de uma HQ criada por ela, Black Silence.</p>
								<p>Em uma série de publicações no Twitter, Cagnin apontou semelhanças entre sua história, lançada em 2016, e a trama assinada por Baran Bo Odar e Jantje Friese, criadores de Dark. "Está tudo lá: A pirâmide negra. As mortes dentro do navio/nave. A tripulação multinacional. As coisas aparentemente estranhas e sem explicação. Os símbolos nos olhos e quando eles aparecem. As escritas em códigos. As vozes chamando por eles. Detalhes sutis da trama, como dramas pessoais dos personagens, incluindo as mortes misteriosas".</p>
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