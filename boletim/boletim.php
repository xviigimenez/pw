<?php

include_once "clsBoletim.php";

$vlBoletim = new clsBoletim;

$matricula = $_POST['matricula'];
$aluno = $_POST['nome'];

$vlBoletim->setNota1($_POST['nota1']);
$vlBoletim->setNota2($_POST['nota2']);
$vlBoletim->setNota3($_POST['nota3']);

echo "** BOLETIM ** <br>";
echo "Matricula: " . $matricula . " | ";
echo "Aluno: " . $aluno . ".<br>";
echo "com notas " . $vlBoletim->getNota1() . ", " . $vlBoletim->getNota2() . ", " . $vlBoletim->getNota3() . ".<br>";
echo "Ficou com média: " . $vlBoletim->gerarBoletim() . ".<br>";
echo "Situação: " . $vlBoletim->getSituacao() . ".";
?>