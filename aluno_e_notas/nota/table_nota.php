<?php
include "../database_PDO.php";

    try {
        $array = $connect->prepare("SELECT a.matricula, a.aluno, g.nota_1, g.nota_2 from notas g right join aluno a on a.matricula = g.matricula order by a.matricula");
        $array->execute();

        $produtos = $array->fetchAll();
        $count = count($produtos);
        $RetornoJSON = json_encode($produtos);
        echo $RetornoJSON;
    }
    catch (Exception $erro) {
        $RetornoJSON = "Erro: ".$erro->getMessage();
    }
?>