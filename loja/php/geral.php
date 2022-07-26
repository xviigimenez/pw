<?php
    include '../bd/database.php';
    try{
        if(isset($_GET['data_inicio'])){$data1 = $_GET['data_inicio'];};
        if(isset($_GET['data_fim'])){$data2 = $_GET['data_fim'];};

        if($data1 != null && $data2 != null){
            $data1 = $_GET['data_inicio'];
            $data2 = $_GET['data_fim'];

            $select = $connect->prepare('select * from loja where dt_servico between ? and ?');
            $select->bindParam(1,$data1);
            $select->bindParam(2,$data2);
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