<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Anuncie - Geek Gate</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link href="css/index.css" rel="stylesheet">
	</head>
    <body>
        <?php
            include 'nav.html';
        ?>
        
		<main class="offset-md-2 offset-sm-2 offset-lg-1">
			<article class="container">
				<div class="d-flex flex-column flex-md-row py-4">
					<div class="col-6">
						<h1 class="fs-4">Anuncie</h1>
						<form action="anuncie.php" method="POST" class="">
							<input type="text" name="nome" placeholder="Digite seu nome:" class="mt-3 form-control">
							<input type="email" name="email" placeholder="Digite seu e-mail:" class="form-control mt-3">
							<textarea name="mensagem" placeholder="Digite sua mensagem:" class="form-control mt-3 mensagem-altura"></textarea>
							<input type="submit" class="offset-10 mt-3">
						</form>
					</div>
					<div class="col-5 offset-1 mt-4">
						<h2 class="fs-6 py-3">Exponha seu anúncio na Geek Gate</h2>
						<p>Interessado em divulgar aqui na Geek Gate? Envie uma mensagem nos dando seu nome, e-mail e claro a mensagem e nós estaremos entrando em contato.</p>
					</div>
				</div>
			</article>
        </main>
		
        <?php
            include 'footer.html';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>