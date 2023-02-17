<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contato - Geek Gate</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link href="css/index.css" rel="stylesheet">
		<link href="images/sigla.webp" rel="icon">
	</head>
    <body>
        <?php include 'nav.html'; ?>
		
        <main class="offset-sm-3 offset-md-2 espacamento">
			<article class="container">
				<div class="d-flex flex-column flex-md-row py-4">
					<div class="col-12 col-md-6">
						<h1 class="fs-4">Entre em contato</h1>
						<form action="contato.php" method="POST">
							<input type="text" name="nome" placeholder="Digite seu nome:" class="form-control mt-3">
							<input type="email" name="email" placeholder="Digite seu e-mail:" class="form-control mt-4">
							<textarea name="mensagem" placeholder="Digite sua mensagem:" class="form-control mt-4 mensagem-altura"></textarea>
							<input type="submit" class="col-3 offset-9 mt-3 primary-color text-white rounded-3 border-0 botao">
						</form>
					</div>
					<div class="col-12 col-md-5 offset-md-1 mt-4">
						<p>Gostou dos nossos conteúdos, tem alguma sugestão. Entre em contrato e nos ajude a tornar o portal cada vez melhor.</p>
					</div>
				</div>
			</article>
        </main>
		
        <?php include 'footer.html'; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>