<?php
include "../database_PDO.php";

    try {
        if(isset($_GET['matricula']))
        {
            $Matricula = $_GET['matricula'];

            $array = $connect->prepare("SELECT matricula, aluno, nascimento FROM aluno WHERE matricula = ?");
            $array->bindParam(1,$Matricula);
            $array->execute();
    
            $produtos = $array->fetchAll();
            $RetornoJSON = json_encode($produtos);
            echo $RetornoJSON;
        }
        else
        {
            $array = $connect->prepare("SELECT matricula, aluno, nascimento FROM aluno");
            $array->execute();
    
            $produtos = $array->fetchAll();
            $RetornoJSON = json_encode($produtos);
            echo $RetornoJSON;
        }
    }
    catch (Exception $erro) {
        $RetornoJSON = "Erro: ".$erro->getMessage();
    }
?>