<?php
	session_start();
	
	include "Conexao.php";
	
	$codigo = $_SESSION['Liga']['codigo'];
	$mensagem = utf8_encode(base64_decode($_GET['mensagem']));
	$codigoAmigo = $_GET['codigoAmigo'];
	
	$query = "insert into tb_mensagem(nm_mensagem, dt_mensagem, cd_usuario, cd_amigo) values ('$mensagem', now(), '$codigo', '$codigoAmigo')";
	$result = mysql_query($query) or die(mysql_error());
	
	echo "<script> parent.txt_input_chat$codigoAmigo.value = ''; parent.Chat.src = 'php/BuscarChat.php?codigoAmigo=".$codigoAmigo."'; </script>";
?>