<?php

include "conexao.php" ;

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$strx = $senha;
	$senhaencriptada = base64_encode($strx);
	//SQL que faz a inserção no banco dos dados recebidos!
 			 
    $sql = mysqli_query($conexao, "INSERT INTO usuarios (nome, senha)VALUES ('$nome', '$senhaencriptada')") or die ('Errro ao inserir os dados'.mysqli_error($conexao));
	
	echo "Cadastro efetuado com sucesso!";
	header("Location:logado.php?nome=$nome");
	
?>
<html>
	<head> 
		<title>Redirecionando</title>
			<script type="text/javascript"> alert("Cadastrado com sucesso!"); 
			window.location="applications.php"; </script> 
	</head>
<body>
</body> 
</html>
