<?php
include "../database_PDO.php";

    try {
        if(isset($_GET['id_nota']))
        {
            $ID = $_GET['id_nota'];

            $array = $connect->prepare("SELECT g.id_nota, a.matricula, a.aluno, g.nota_1, g.nota_2 from notas g right join aluno a on a.matricula = g.matricula  where id_nota = ? order by a.matricula");
            $array->bindParam(1,$ID);
            $array->execute();

            $produtos = $array->fetchAll();
            $count = count($produtos);
            $RetornoJSON = json_encode($produtos);
            echo $RetornoJSON;
        }
        else
        {
            $array = $connect->prepare("SELECT g.id_nota, a.matricula, a.aluno, g.nota_1, g.nota_2 from notas g right join aluno a on a.matricula = g.matricula order by a.matricula");
            $array->execute();

            $produtos = $array->fetchAll();
            $count = count($produtos);
            $RetornoJSON = json_encode($produtos);
            echo $RetornoJSON;
        }
            
    }
    catch (Exception $erro) {
        $RetornoJSON = "Erro: ".$erro->getMessage();
    }
?>