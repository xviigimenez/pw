<?php
include "database.php";
$codigo = $_POST['codigo'];

	try {
		if ($codigo == '') {
			$array = $connect->prepare("select codigo, descricao, valor, quantidade, pagamento from produto");
		}
		else {
			$array = $connect->prepare("select codigo, descricao, valor, quantidade, pagamento from produto where codigo = ?");
			$array->bindParam(1, $codigo);
		}
		$array->execute();

		$produtos = $array->fetchAll();
		$count = count($produtos);
		$RetornoJSON = json_encode($produtos);
		echo $RetornoJSON;
		echo $count;
	}
	catch (Exception $erro) {
		$RetornoJSON = "Erro: ".$erro->getMessage();
	}
?>