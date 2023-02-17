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
							<h1 class="fs-4">DRX ganha campeonato mundial de League Of Legends</h1>
							<div class="d-flex flex-column">
								<img class="mb-3" src="images/drx.webp" alt="Imagem do time da DRX erguendo o troféu do mundial de League Of Legends com a plateia ao fundo">
								<p>No dia 5 de novembro, o campeonato mundial de League Of Legends chegava ao seu fim em São Francisco, com o jogo entre DRX e T1. Após uma série de resultado 3-2, a DRX ganhou o título de campeã mundial pela primeira vez.</p>
								<p>Essa vitória marca um momento histórico, pois a DRX quase não se classificou para o evento. Eles ficaram em quarto lugar na liga coreana de LOL, e quase foram eliminados na fase de grupos, tendo que lutar muito para chegar as finais. E mais, eles estavam contra a tricampeã T1, que trazia consigo a estrela do jogo Faker, e mesmo com todas as dificuldades eles conseguiram chegar ao fim e ganhar.</p>
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