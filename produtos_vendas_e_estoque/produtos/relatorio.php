<?php
include "../conexao/conexao.php";

    try {
        $select = $connect->prepare("SELECT * from tab_produtos");
        $select->execute();

        $relatorio = $select->fetchAll();
        $RetornoJSON = json_encode($relatorio);
    }
    catch (Exception $erro) {
        $RetornoJSON = "Erro: ".$erro->getMessage();
    }
    echo $RetornoJSON;
?>