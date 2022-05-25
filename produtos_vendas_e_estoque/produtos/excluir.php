<?php
include "../conexao/conexao.php";

$codigo = $_POST['cod_prod'];

try{
        $delete = $connect->prepare("delete from tab_produtos where cod_prod = ?");
        $delete->bindParam(1,$codigo);
        $delete->execute();

        if($delete->rowCount() > 0)
        {
            $RetornoJSON = "deletado";

            $codigo = null;
        }
}
catch(PDOException $erro){
    $RetornoJSON = "ERRO: " . $erro->getMessage();
}
echo $RetornoJSON;
?>