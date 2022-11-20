<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Anuncie - Geek Gate</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css">
	</head>
    <body>
        <?php
            include 'nav.html';
        ?>
        
        <article class="container">
            <h1>Anuncie</h1>
            <form action="anuncie.php" method="POST">
                <input type="text" name="nome" placeholder="Digite seu nome:">
                <input type="email" name="email" placeholder="Digite seu e-mail:">
                <textarea name="mensagem" placeholder="Digite sua mensagem:"></textarea>
                <input type="submit">
            </form>
            <h2 class="fs-6">Exponha seu anúncio na Geek Gate</h2>
            <p>Interessado em divulgar aqui na Geek Gate? Envie uma mensagem nos dando seu nome, e-mail e claro a mensagem e nós estaremos entrando em contato.</p>
        </article>
        
        <?php
            include 'footer.html';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>