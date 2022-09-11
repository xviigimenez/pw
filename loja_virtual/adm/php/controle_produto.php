<?php
include_once 'clsAdm.php';

$classe = new clsAdm;

$botao = $_POST['botao'];

if($botao == 'Cadastrar'){
    $id = $_POST['id'];
    $nome = $_POST['produto'];
    $preco = $_POST['preco'];
    $desc = $_POST['descricao'];
    $foto_atual = $_FILES['foto']['name'];
    $foto_temp = $_FILES['foto']['tmp_name'];

    $classe->setID($id);
    $classe->setNome_prod($nome);
    $classe->setPreco($preco);
    $classe->setDesc($desc);
    $classe->setFoto($foto_atual);
    $classe->setFotoTmp($foto_temp);

    $classe->cadastrarProduto();
}
if($botao == 'Apagar'){
    $id = $_POST['id'];

    $classe->setID($id);

    $classe->deletarProduto();
}
if($botao == 'Consultar'){
    $classe->consultarProduto();
}
?>