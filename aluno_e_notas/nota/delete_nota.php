<?php
include "../database_PDO.php";
if(isset($_POST['matricula'])){$Matricula = $_POST['matricula'];}
if(isset($_GET['matricula'])){$Matricula = $_GET['matricula'];}


try{
    if(isset($_GET['id_nota']))
    {
        $ID = $_GET['id_nota'];

        $delete = $connect->prepare("delete from notas where matricula = ? and id_nota = ?");
        $delete->bindParam(1,$Matricula);
        $delete->bindParam(2,$ID);
        $delete->execute();

        if ($delete)
        {
            $RetornoJSON = "Deletado com sucesso!";
        }
        else{
            $RetornoJSON = "Não foi deletado.";
        }
    }
    else
    {
        $delete = $connect->prepare("delete from notas where matricula = ?");
        $delete->bindParam(1,$Matricula);
        $delete->execute();

        if ($delete)
        {
            $RetornoJSON = "Deletado com sucesso!";
        }
        else{
            $RetornoJSON = "Não foi deletado.";
        }
    }
}
catch(PDOException $erro)
      {
          $RetornoJSON = "ERRO: " . $erro->getMessage();
      }
echo $RetornoJSON;
?>