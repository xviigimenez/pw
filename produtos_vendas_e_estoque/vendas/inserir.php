<?php
include "../conexao/conexao.php";

$cod_venda = $_POST['cod_venda'];
$cod_prod = $_POST['cod_prod'];
$qtd = $_POST['qtd'];
$data = $_POST['data'];

try{
        $inserir = $connect->prepare("insert into tab_vendas (cod_venda, cod_prod, quantidade, data) values (?,?,?,?)");
        $inserir->bindParam(1,$cod_venda);
        $inserir->bindParam(2,$cod_prod);
        $inserir->bindParam(3,$qtd);
        $inserir->bindParam(4,$data);
        $inserir->execute();

        if($inserir->rowCount() > 0)
        {
            $RetornoJSON = "inserido";

            $cod_venda = null;
            $cod_prod = null;
            $qtd = null;
            $data = null;
        }
}
catch(PDOException $erro){
    $RetornoJSON = "ERRO: " . $erro->getMessage();
}
echo $RetornoJSON;
?>