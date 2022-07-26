<?php
include "../bd/database.php";

$pedido = $_POST['pedido'];

try{
        $delete = $connect->prepare("delete from loja where pedido = ?");
        $delete->bindParam(1,$pedido);
        $delete->execute();

        if($delete->rowCount() > 0)
        {
            $Retorno = "Excluído!";

            $codigo = null;
        }
        else{
            $Retorno = "Deu Errado!";
        }
}
catch(PDOException $error){
    $Retorno = "ERRO: " . $error->getMessage();
}
echo $Retorno;
?>