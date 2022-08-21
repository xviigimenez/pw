<?php
include_once 'clsBoletim.php';

$boleto = new clsBoletim;

$btn = $_POST['enviar'];
$boleto->setNome($_POST['nome']);
$boleto->setMatricula($_POST['matricula']);
$boleto->setNota1($_POST['nota1']);
$boleto->setNota2($_POST['nota2']);
$boleto->setNota3($_POST['nota3']);

if($btn == 'Incluir'){
    echo $boleto->incluir();
}

if($btn == 'Excluir'){
    echo $boleto->excluir();
}

if($btn == 'Pesquisar'){
    header('Location: pesquisa.php');
}
?>