<?php
include "../database_PDO.php";
$Matricula = $_POST['matricula'];
$Nota1 = $_POST['nota_1'];
$Nota2 = $_POST['nota_2'];
        try
        {
            $comando = $connect->prepare ("insert into notas (matricula, nota_1, nota_2) values (?,?,?)");
            $comando->bindParam(1,$Matricula);
            $comando->bindParam(2,$Nota1);
            $comando->bindParam(3,$Nota2);

            $comando->execute();

                if ($comando->rowCount() > 0)
                {
                    $Matricula = null;
                    $Nome = null;
                    $Nasc = null;

                    $RetornoJSON = "Cadastro efetuado com êxito!";
                }
                else {
                    $RetornoJSON = "Erro ao efetuar o cadastro!";
                }
        }
      catch(PDOException $erro)
      {
          $RetornoJSON = "ERRO: " . $erro->getMessage();
      }
      echo $RetornoJSON;
?>