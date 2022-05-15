<?php
include "../database_PDO.php";

    try {
        $array = $connect->prepare("select matricula, aluno, nascimento from aluno");
        $array->execute();

        $produtos = $array->fetchAll();
        $count = count($produtos);
        $RetornoJSON = json_encode($produtos);
        echo $RetornoJSON;
        echo $count;
    }
    catch (Exception $erro) {
        $RetornoJSON = "Erro: ".$erro->getMessage();
    }
?>