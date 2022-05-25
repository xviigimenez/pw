<?php
	$database = "produtos_estoque_e_vendas";
	$user = "root";
	$password = "";
	
	try {
		$connect = new PDO("mysql:host=localhost; dbname=$database", "$user", "$password");
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connect->exec("set names utf8");
	}
	
	catch (PDOException $erro) {
		echo "Erro na conexão: " . $erro->getMessage();
	}
?>