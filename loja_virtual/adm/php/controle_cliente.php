<?php
include_once 'clsAdm.php';

$classe = new clsAdm;

$botao = $_POST['botao'];

if($botao == 'Cadastrar'){
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $classe->setCPF($cpf);
    $classe->setNome($nome);
    $classe->setEmail($email);
    $classe->setSenha($senha);

    $classe->cadastrarCliente();
}
if($botao == 'Apagar'){
    $cpf = $_POST['cpf'];
    
    $classe->setCPF($cpf);

    $classe->deletarCliente();
}
if($botao == 'Consultar'){
    $classe->consultarCliente();
}
?>