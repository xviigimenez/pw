<?php
include "../database_PDO.php";

$ID = $_GET['id_nota'];
$Nota1 = $_POST['nota_1'];
$Nota2 = $_POST['nota_2'];

    try {
        if($ID == null || $Nota1 == null || $Nota2 == null)
        {
            $RetornoJSON = "Espaços Vazios";
        }
        else
        {
            $array = $connect->prepare("UPDATE notas set nota_1 = ?, nota_2 = ? where id_nota = ?");
            $array->bindParam(1,$Nota1);
            $array->bindParam(2,$Nota2);
            $array->bindParam(3,$ID);
            $array->execute();
        
            if($array)
            {
                $RetornoJSON = "Alterado!";
            }
            else
            {
                $RetornoJSON = "Não Alterado.";
            }
        }
    }
    catch (Exception $erro) {
        $RetornoJSON = "Erro: ".$erro->getMessage();
    }
echo $RetornoJSON;
?>