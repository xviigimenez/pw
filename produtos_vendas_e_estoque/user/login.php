<?php
include "../conexao/conexao.php";

$user = $_POST['user'];
$senha = $_POST['password'];

try{
        $login = $connect->prepare("select * from tab_login where usuario = ? and senha = ?");
        $login->bindParam(1,$user);
        $login->bindParam(2,$senha);
        $login->execute();

        if($login->rowCount() > 0)
        {
            $RetornoJSON = "granted";
        }
}
catch(PDOException $erro){
    $RetornoJSON = "ERRO: " . $erro->getMessage();
}
echo $RetornoJSON;
?>