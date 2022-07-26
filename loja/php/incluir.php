<?php
    include '../bd/database.php';

    $pedido = $_POST['pedido'];
    $cliente = $_POST['cliente'];
    $servico = $_POST['servico_form'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];

    try{
        $incluir = $connect->prepare('insert into loja values (?,?,?,?,?)');
        $incluir->bindParam(1,$pedido);
        $incluir->bindParam(2,$cliente);
        $incluir->bindParam(3,$servico);
        $incluir->bindParam(4,$data);
        $incluir->bindParam(5,$valor);
        
        $incluir->execute();

        if($incluir->rowCount() > 0)
        {
            $Retorno = 'Inserido!';

            $pedido = null;
            $cliente = null;
            $servico = null;
            $data = null;
            $valor = null;
        }
        else{
            $Retorno = "Deu Errado!";
        }
    }
    catch(PDOException $error){
        $Retorno = 'Erro na inserção' . $error->getMessage();
    }
    echo $Retorno;
?>