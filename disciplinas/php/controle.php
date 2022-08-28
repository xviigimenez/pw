<?php
include_once '../clsDisciplinas.php';

$classe = new clsDisciplinas;

if(isset($_GET['periodo']) && isset($_GET['curso'])){
    $classe->setPeriodo($_GET['periodo']);
    $classe->setCurso($_GET['curso']);
    $classe->mostraDisciplina();
}
elseif(isset($_GET['periodo'])){
    $classe->setPeriodo($_GET['periodo']);
    $classe->mostraCurso();
}
else{
    $classe->mostraPeriodo();
}
?>