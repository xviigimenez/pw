<?php
include_once '../../adm/php/clsAdm.php';

$classe = new clsAdm;

if(isset($_POST['botao'])){
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
    if($botao == 'Entrar'){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $classe->setEmail($email);
        $classe->setSenha($senha);
    
        $classe->entrarCliente();
    }
}
else{
    $classe->consultarProduto();
}
?> 