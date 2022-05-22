<?php
include "../database_PDO.php";

$Matricula = $_POST['matricula'];
$Nome = $_POST['nome'];
$Data = $_POST['dataNasc'];

    try {
        if($Matricula == null || $Nome == null || $Data == null)
        {
            $RetornoJSON = "Espaços Vazios";
        }
        else
        {
            $array = $connect->prepare("UPDATE aluno set aluno = ?, nascimento = ? where matricula = ?");
            $array->bindParam(1,$Nome);
            $array->bindParam(2,$Data);
            $array->bindParam(3,$Matricula);
            $array->execute();
        
            if($array)
            {
                $RetornoJSON = "Alterado!";
            }
            else
            {
                $RetornoJSON = "Não Alterado.";
            }
        }
    }
    catch (Exception $erro) {
        $RetornoJSON = "Erro: ".$erro->getMessage();
    }
echo $RetornoJSON;
?>