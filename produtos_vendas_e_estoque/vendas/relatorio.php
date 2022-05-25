<?php
include "../conexao/conexao.php";

    try {
        $select = $connect->prepare("SELECT v.cod_venda, v.cod_prod, p.descricao, v.quantidade, p.valor from tab_vendas v left join tab_produtos p on v.cod_prod = p.cod_prod");
        $select->execute();

        $relatorio = $select->fetchAll();
        $RetornoJSON = json_encode($relatorio);
    }
    catch (Exception $erro) {
        $RetornoJSON = "Erro: ".$erro->getMessage();
    }
    echo $RetornoJSON;
?>