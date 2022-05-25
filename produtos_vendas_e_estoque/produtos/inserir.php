<?php
include "../conexao/conexao.php";

$codigo = $_POST['cod_prod'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$vencimento = $_POST['vencimento'];

try{
        $inserir = $connect->prepare("insert into tab_produtos (cod_prod, descricao, valor, vencimento) values (?,?,?,?)");
        $inserir->bindParam(1,$codigo);
        $inserir->bindParam(2,$descricao);
        $inserir->bindParam(3,$valor);
        $inserir->bindParam(4,$vencimento);
        $inserir->execute();

        if($inserir->rowCount() > 0)
        {
            $RetornoJSON = "inserido";

            $descricao = null;
            $valor = null;
            $vencimento = null;
        }
}
catch(PDOException $erro){
    $RetornoJSON = "ERRO: " . $erro->getMessage();
}
echo $RetornoJSON;
?>