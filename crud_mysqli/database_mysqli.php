<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "crud";

	$connect = new mysqli($server, $user, $password, $database);
	if(!$connect){
		echo "Não foi possível conectar-se ao banco de dados.";
		mysql_error();
		exit;
	}
?>
