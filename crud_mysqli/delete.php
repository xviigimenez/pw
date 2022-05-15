<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="imagem/png" href="icon.png">
        <title>CRUD - Delete</title>
    </head>
    <body>
        <?php
            include "./table.php";
            include "./nav.php";
        ?>
        <div>
            <form name="form_create" action="delete.php" method="post">
                Matrícula <br><input type="number" name="matricula" width="5%"><br><br>
                <input type="submit" value="Delete" name="submit_delete">
                <input type="reset" value="Clear">
            </form>

            <?php
                if(isset($_POST["submit_delete"]))
                {
                    include "database_mysqli.php";
                    $matricula = $_POST["matricula"];

                    echo $matricula;

                    $inserir = "delete from matricula where matricula = " . $matricula;
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
