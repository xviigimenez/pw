<?php
include_once 'clsAdm.php';

$classe = new clsAdm;

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if($cpf != null && $nome != null){
    $classe->setCPF($cpf);
    $classe->setNome($nome);
    $classe->setEmail($email);
    $classe->setSenha($senha);

    $classe->cadastrarCliente();
}
elseif($cpf != null) {
    $classe->setCPF($cpf);

    $classe->deletarCliente();
}
else{
    $classe->consultarCliente();
}
?>