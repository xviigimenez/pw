<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="imagem/png" href="icon.png">
        <title>CRUD - Create</title>
    </head>
    <body>
        <?php
            include "./table.php";
            include "./nav.php";
        ?>
        <div>
            <form name="form_create" action="create.php" method="post">
                Nome <br><input type="text" name="nome" width="5%"><br><br>
                Nascimento <br><input type="date" name="nascimento" width="5%"><br><br>
                Mensalidade <br><input type="number" name="mensalidade" width="5%"><br><br>
                <input type="submit" value="Inserir" name="submit_create">
                <input type="reset" value="Limpar">
            </form>

            <?php

            if(isset($_POST["submit_create"]))
            {
                include "database_mysqli.php";
                $nome = $_POST["nome"];
                $nascimento = $_POST["nascimento"];
                $mensalidade = $_POST["mensalidade"];

                $inserir = "insert into matricula (nome, nascimento, mensalidade) values ('$nome','$nascimento', '$mensalidade')";
                $resultado = mysqli_query($connect, $inserir);
                if(!$resultado)
                {
                    echo "<script> window.alert('Deu erro'); </script>";
                }
                else
                {
                    header("Location: index.php");
                }
            }
            ?>
        </div>
    </body>
</html>
