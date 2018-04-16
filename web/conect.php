<?php
	$host = "192.168.33.11";
	$user = "root";
	$pass = "1234";
	$db = "teste";

	$conexao = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error(), E_USER_ERROR);
?>
