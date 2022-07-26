<?php
    include '../bd/database.php';
    try{
        if(isset($_GET['data_inicio'])){$data1 = $_GET['data_inicio'];};
        if(isset($_GET['data_fim'])){$data2 = $_GET['data_fim'];};
        if(isset($_GET['tipo'])){$tipo = $_GET['tipo'];};

        if($data1 != null && $data1 != null && $tipo == 'Contrato_e_Avulso'){
            $select = $connect->prepare('select * from loja where dt_servico between ? and ?');
            $select->bindParam(1,$data1);
            $select->bindParam(2,$data2);
            $select->execute();
        }
        elseif($data1 != null && $data1 != null && $tipo != null){
            $select = $connect->prepare('select * from loja where tipo_cliente = ? and dt_servico between ? and ?');
            $select->bindParam(1,$tipo);
            $select->bindParam(2,$data1);
            $select->bindParam(3,$data2);
            $select->execute();
        }
        elseif($tipo == 'Contrato_e_Avulso'){
            $select = $connect->prepare('select * from loja');
            $select->execute();
        }
        elseif($tipo != null){
            $select = $connect->prepare('select * from loja where tipo_cliente = ?');
            $select->bindParam(1,$tipo);
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