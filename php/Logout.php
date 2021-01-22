<?php
	session_start();
	
	include "Conexao.php";
	
	$codigo = $_SESSION['Liga']['codigo'];
	
	$query = "update tb_usuario set ic_logado = 0 where cd_usuario = '$codigo'";
	$result = mysql_query($query) or die(mysql_error());
	
	setcookie("Liga[nick]", "", time()-3600, "/");
	setcookie("Liga[senha]", "", time()-3600, "/");
	
	unset($_SESSION['Liga']);
	
	header("Location: ../index.php");
?>

<?php
	mysql_close($conexao);
?>