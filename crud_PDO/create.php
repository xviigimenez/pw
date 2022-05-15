<?php
include "database_PDO.php";
$Matricula = $_POST['matricula'];
$Nome = $_POST['nome'];
$Nasc = $_POST['dataNasc'];
$Mensalidade = $_POST['mensalidade'];
        try
        {
            $comando = $connect->prepare ("insert into matricula (matricula, nome, nascimento, mensalidade) values (?,?,?,?)");
            $comando->bindParam(1,$Matricula);
            $comando->bindParam(2,$Nome);
            $comando->bindParam(3,$Nasc);
            $comando->bindParam(4,$Mensalidade);

            $comando->execute();

                if ($comando->rowCount() > 0)
                {
                    $Matricula = null;
                    $Nome = null;
                    $Nasc = null;
                    $Mensalidade = null;

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