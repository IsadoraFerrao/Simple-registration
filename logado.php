<?php
	session_start();
?>

<?php

	if(!isset($_GET["nome"])){
		echo "<center><h1>Página não encontrada!</h1></center>";
		exit();
	}
	$nome=$_GET["nome"];
?>
﻿
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de testes </title>
</head>
<body> 
	<h1>Logado</h1>
	<h2>Seja bem vindo, <?php echo $nome;?></h2>
</body>
</html>
