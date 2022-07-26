<?php
    include '../bd/database.php';
    try{
        if(isset($_GET['data_inicio'])){$data1 = $_GET['data_inicio'];};
        if(isset($_GET['data_fim'])){$data2 = $_GET['data_fim'];};
        if(isset($_GET['servico'])){$servico = $_GET['servico'];};

        if($data1 != null && $data2 != null && $servico == '---' || $data1 != null && $data2 != null && $servico == 'tudo'){
            $select = $connect->prepare('select * from loja where dt_servico between ? and ?');
            $select->bindParam(1,$data1);
            $select->bindParam(2,$data2);
            $select->execute();
        }
        elseif($data1 != null && $data2 != null && $servico != null){
            $select = $connect->prepare('select * from loja where servico = ? and dt_servico between ? and ?');
            $select->bindParam(1,$servico);
            $select->bindParam(2,$data1);
            $select->bindParam(3,$data2);
            $select->execute();
        }
        elseif($servico == '---' || $servico == 'tudo'){
            $select = $connect->prepare('select * from loja');
            $select->execute();
        }
        elseif($servico != null){
            $select = $connect->prepare('select * from loja where servico = ?');
            $select->bindParam(1,$servico);
            $select->execute();
        }
        else{
            $select = $connect->prepare('select * from loja');
            $select->execute();
        }
            $msg = $select->fetchAll();
            $Retorno = json_encode($msg);
    }
    catch(PDOException $error){
        $Retorno = 'Erro no select ' . $error->getMessage();
    }
    echo $Retorno;
?>