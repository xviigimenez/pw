<?php
include "../conexao/conexao.php";

    try {
        $select = $connect->prepare("SELECT e.cod_movto, e.data_movto, e.tipo, p.descricao from tab_estoque e left join tab_produtos p on e.cod_prod = p.cod_prod");
        $select->execute();

        $relatorio = $select->fetchAll();
        $RetornoJSON = json_encode($relatorio);
    }
    catch (Exception $erro) {
        $RetornoJSON = "Erro: ".$erro->getMessage();
    }
    echo $RetornoJSON;
?>