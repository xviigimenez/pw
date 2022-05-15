<?php
include "../database_PDO.php";
$Matricula = $_POST['matricula'];


try{
    $delete = $connect->prepare("delete from aluno where matricula = ?");
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
catch(PDOException $erro)
{
    $RetornoJSON = "ERRO: " . $erro->getMessage();
}
echo $RetornoJSON;
?>