<?php
	define('BD_USER', 'root');
	define('BD_PASS', '');
	define('BD_NAME', 'vulnerabilidades');
	$conexao = mysqli_connect('localhost', 'root', '');
	$link = mysqli_select_db($conexao, BD_NAME);
?>

