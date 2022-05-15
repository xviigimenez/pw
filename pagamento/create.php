<?php
include "database.php";
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$forma_de_pgto = $_POST['forma_de_pagamento'];
$valorfinal = 0;

        function vezes($valor, $quantidade)
        {
            $resultado = $valor * $quantidade;
            return $resultado;
        }

        function prazo($forma, $dinheiro)
        {
            if($forma == "A prazo")
            {
                $dinheiro = $dinheiro + ($dinheiro * 0.075);
                return $dinheiro;
            }
            else
                return $dinheiro;
        }

        $valorfinal = vezes($valor,$quantidade);
        $valorfinal = prazo($forma_de_pgto,$valorfinal);

        try
        {
            $comando = $connect->prepare ("insert into produto (codigo, descricao, valor, quantidade, pagamento, valor_final) values (?,?,?,?,?,?)");
            $comando->bindParam(1,$codigo);
            $comando->bindParam(2,$descricao);
            $comando->bindParam(3,$valor);
            $comando->bindParam(4,$quantidade);
            $comando->bindParam(5,$forma_de_pgto);
            $comando->bindParam(6,$valorfinal);

            $comando->execute();

                if ($comando->rowCount() > 0)
                {
                    $codigo = null;
                    $descricao = null;
                    $valor = null;
                    $quantidade = null;
                    $forma_de_pgto = null;
                    $valorfinal = null;

                    $RetornoJSON = "Cadastro efetuado com êxito!";
                }
                else {
                    $RetornoJSON = "Erro ao efetuar o cadastro!";
                }
        }
      catch(PDOException $erro)
      {
          $RetornoJSON = "ERRO: " . $erro->getMessage();
      }
      echo $RetornoJSON;
?>