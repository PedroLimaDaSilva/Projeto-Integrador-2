<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Geek Gate</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include 'nav.html';
        ?>
        
        <article>
            <h1>Entre em contato</h1>
            <form action="">
                <input type="text" name="nome">
                <input type="email" name="email">
                <textarea name="mensagem"></textarea>
                <input type="submit">
            </form>
            <p></p>
            <?php
                include 'footer.html';
            ?>
        </article>
        
        <?php
            include 'footer.html';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>