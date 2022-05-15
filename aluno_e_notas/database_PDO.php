<?php
	$database = "aluno_e_notas";
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
