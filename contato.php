<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Geek Gate</title>
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
						<h1 class="fs-4">Entre em contato</h1>
						<form action="contato.php" method="POST">
							<input type="text" name="nome" placeholder="Digite seu nome:" class="form-control mt-3">
							<input type="email" name="email" placeholder="Digite seu e-mail:" class="form-control mt-4">
							<textarea name="mensagem" placeholder="Digite sua mensagem:" class="form-control mt-4 mensagem-altura"></textarea>
							<input type="submit" class="offset-10 mt-3">
						</form>
					</div>
					<div class="col-5 offset-1 mt-4">
						<p>Duis fringilla leo odio, nec commodo elit egestas id. Proin nec ante eu nibh convallis consequat sit amet vel augue.</p>
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