<?php
include "../database_PDO.php";
$Matricula = $_POST['matricula'];
$Aluno = $_POST['nome'];
$Nasc = $_POST['dataNasc'];

try
{
    $comando = $connect->prepare("insert into aluno (matricula, aluno, nascimento) values (?,?,?)");
    $comando->bindParam(1,$Matricula);
    $comando->bindParam(2,$Aluno);
    $comando->bindParam(3,$Nasc);

    $comando->execute();

    if ($comando)
    {
        $Matricula = null;
        $Nome = null;
        $Nasc = null;

        $RetornoJSON = "Cadastro efetuado com êxito!";
    }
    else {
        $RetornoJSON = "Erro ao efetuar o cadastro!";
    }
}
catch(PDOException $erro)
{
    $RetornoJSON = "ERRO: " . $erro->getMessage();
}
echo $RetornoJSON;
?>