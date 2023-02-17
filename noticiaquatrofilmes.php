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
							<h1 class="fs-4">Novo Homem-Formiga e a Vespa: As informações sobre o filme</h1>
							<div class="d-flex flex-column">
								<img class="mb-3" src="images/formiga.webp" alt="Imagem do Homem-Formiga à esquerda e da Vesta à direita com o nome do filme Ant-man and the Wasp Quantumania abaixo">
								<p>Com programação para 2023, o filme Homem Formiga e a Vespa: Quantumania já está apresentando bons detalhes a todos que acompanham o universo Marvel.</p>
								<p>Sendo o terceiro filme do herói, no trailer apresentado já mostra um novo vilão, Kang, que será interpretado pelo ator Jonathan Majors. No trailer, mostra que por um acidente Scott e sua famíla são puxados para o Reino Quântico, com a Vespa original nada feliz e aparentando esconder um segredo, e nesse meio ainda enfrentando os vilões em seu caminho.</p>
								<p>O filme contará no elenco com Paul Rudd, Evangeline Lilly, Kathryn Newton, Michael Douglas, Michelle Pfeiffer, entre outros, e a direção será por conta de Peyton Reed. Esperamos por muita aventura e risadas.</p>
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