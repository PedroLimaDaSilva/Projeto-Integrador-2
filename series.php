<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Séries - Geek Gate</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="css/index.css" rel="stylesheet">
</head>
<body>
	<?php
		include 'nav.html';
	?>

	<div class="offset-sm-2 offset-md-2 offset-lg-1 pt-4">
		<div class="container">
			<div class="d-flex flex-lg-row flex-column">
				<div class="col-lg-2 col-md-12"><?php include 'subnavseries.html'; ?></div>
				<main class="col-8">
					<article>
						<section class="card mb-4">
							<img src="images/cardgrande.png" alt="#" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaeca</p>
								<a href="#" class="btn">Leia mais</a>
							</div>
						</section>
						<div class="d-flex flex-md-row flex-column">
							<section class="card col-lg-5 col-md-5">
								<img src="images/cardpqn.png" alt="#" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Lorem ipsum dolor sit amet.</p>
									<a href="#" class="btn">Leia mais</a>
								</div>
							</section>
							<section class="card col-lg-5 offset-2 col-md-5">
								<img src="images/cardpqn.png" alt="#" class="card-img-top">
								<div class="card-body">
									<p class="card-text">Lorem ipsum dolor sit amet</p>
									<a href="#" class="btn">Leia mais</a>
								</div>
							</section>
						</div>
						<section class="card my-4">
							<img src="images/cardmedio.png" alt="#" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Lorem ipsum dolor sit amet</p>
								<a href="#" class="btn">Leia mais</a>
							</div>
						</section>
						<section class="card">
							<img src="images/cardmedio.png" alt="#" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Lorem ipsum dolor sit amet</p>
								<a href="#" class="btn">Leia mais</a>
							</div>
						</section>
						<section class="card my-4">
							<img src="images/cardmedio.png" alt="#" class="card-img-top">
							<div class="card-body">
								<p class="card-text">Lorem ipsum dolor sit amet</p>
								<a href="#" class="btn">Leia mais</a>
							</div>
						</section>
					</article>
				</main>
				<div class="col-lg-2 col-md-12"><?php include 'veja.html'; ?></div>
			</div>
		</div>
	</div>
	
	<?php
		include 'footer.html';
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>