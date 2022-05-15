<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="imagem/png" href="icon.png">
        <title>CRUD - Update</title>
    </head>
    <body>
        <?php
            include "./table.php";
            include "./nav.php";
        ?>
        <div>
            <form name="form_create" action="update.php" method="post">
                Matrícula <br><input type="number" name="matricula" width="5%"><br><br>
                <input type="submit" value="Query" name="submit_consulta">
                <input type="reset" value="Clear">
            </form>

            <?php
            include 'database_mysqli.php';
            if(isset($_POST['submit_consulta']))
            {
                if ($_POST['matricula'] == null){
                    echo "Digite um Código para alterar";
                    exit;
                }
                $flag = false;
                $matricula = $_POST['matricula'];
                $consulta = "select * from matricula where matricula = $matricula";

                $resultado = mysqli_query($connect, $consulta);
                while ($registro = mysqli_fetch_array($resultado))
                {
                    $var_matricula = $registro['matricula'];
                    $var_nome = $registro['nome'];
                    $var_mensalidade = $registro['mensalidade'];
                    $var_nascimento = $registro['nascimento'];
                    $flag = true;
                }
                if($flag == false)
                {
                    echo "<script>
                            window.alert('Registro não encontrado!'); 
                        </script>";
                }
                else{ 
            ?>
            <h1>Update</h1>
            <form name="form_create" action="update.php" method="post">
                Matrícula <br><input type="number" name="matricula" value="<?php echo $var_matricula ?>" width="5%" readonly><br><br>
                Nome <br><input type="text" name="nome" value="<?php echo $var_nome ?>" width="5%"><br><br>
                Nascimento <br><input type="date" value="<?php echo $var_nascimento ?>" name="nascimento" width="5%"><br><br>
                Mensalidade <br><input type="number" value="<?php echo $var_mensalidade ?>" name="mensalidade" width="5%"><br><br>
                <input type="submit" value="Update" name="submit_delete">
            </form>

            <?php
                }
            }
            if(isset($_POST['submit_delete']))
            {
                $matricula = $_POST['matricula'];
                $nome = $_POST['nome'];
                $nascimento = $_POST['nascimento'];
                $mensalidade = $_POST['mensalidade'];
                $alterar = "update matricula set nome = '$nome', nascimento = '$nascimento', mensalidade = '$mensalidade' where matricula = $matricula;";

                echo $alterar;
                $resultado = mysqli_query($connect, $alterar);
                if(!$resultado){
                    echo "<script>
                          window.alert('Erro na Alteração');
                          </script>";
                }
                else{
                    echo "<script>
                          window.alert('Alterado!');
                          window.location.href = 'index.php';
                          </script>";
                }
            }
            ?>
        </div>
    </body>
</html>
