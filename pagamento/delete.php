<?php
include "database.php";
$codigo = $_POST['codigo'];


try{
    $delete = $connect->prepare("delete from produto where codigo = ?");
	$delete->bindParam(1,$codigo);
    $delete->execute();

    if ($delete)
    {
        $RetornoJSON = "Deletado com sucesso!";
    }
    else{
        $RetornoJSON = "Não foi deletado.";
    }
}
catch(PDOException $erro)
      {
          $RetornoJSON = "ERRO: " . $erro->getMessage();
      }
echo $RetornoJSON;
?>