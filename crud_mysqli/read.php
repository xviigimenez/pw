<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="imagem/png" href="icon.png">
        <title>CRUD - Read</title>
    </head>
    <body>
        <?php
            include "./table.php";
            include "./nav.php";
        ?>
        <div>
            <form name="form_read" action="read.php" method="post">
                matricula <input type="number" name="matricula" width="5%"><br>
                Nome <input type="text" name="nome" width="5%"><br>
                Nascimento <input type="date" name="nascimento" width="5%"><br>
                Mensalidade <input type="number" name="nome" width="5%"><br>
                <input type="submit" value="Consultar" name="submit_read">
                <input type="reset" value="Limpar">
            </form>
        </div>
    </body>
</html>
