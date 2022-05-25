<?php
include "../conexao/conexao.php";

$cod_movto = $_POST['cod_movto'];
$data_mvto = $_POST['data_mvto'];
$tipo = $_POST['tipo'];
$cod_prod = $_POST['cod_prod'];

try{
        $inserir = $connect->prepare("insert into tab_estoque (cod_movto, data_movto, tipo, cod_prod) values (?,?,?,?)");
        $inserir->bindParam(1,$cod_movto);
        $inserir->bindParam(2,$data_mvto);
        $inserir->bindParam(3,$tipo);
        $inserir->bindParam(4,$cod_prod);
        $inserir->execute();

        if($inserir->rowCount() > 0)
        {
            $RetornoJSON = "inserido";

            $cod_movto = null;
            $data_mvto = null;
            $tipo = null;
            $cod_prod = null;
        }
}
catch(PDOException $erro){
    $RetornoJSON = "ERRO: " . $erro->getMessage();
}
echo $RetornoJSON;
?>