<?php
	include "Conexao.php";
	
	$nome = $_POST['nome'];
	$nick = $_POST['nick'];
	$datanas = $_POST['datanas'];
	$telefone = $_POST['telefone'];
	$cpf = $_POST['cpf'];
	$sexo = $_POST['sexo'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$senha = base64_encode($senha);
	
	$telefone = str_replace("(","",$telefone);
	$telefone = str_replace(")","",$telefone);
	$telefone = str_replace("-","",$telefone);
	$telefone = str_replace(" ","",$telefone);
	
	$cpf = str_replace(".","",$cpf);
	$cpf = str_replace("-","",$cpf);
	
	$datanas = explode("/", $datanas);
	
	$datanas = $datanas[2]."-".$datanas[1]."-".$datanas[0];
	
	$query = "
		insert into tb_usuario(nm_usuario, nm_nickname, cd_telefone, dt_datanas, nm_sexo, cd_cpf, nm_email, cd_senha, dt_cadastro)
			values ('$nome', '$nick', '$telefone', '$datanas', '$sexo', '$cpf', '$email', '$senha', now())";
	
	$result = mysql_query($query) or die(mysql_error());
	
	if ($result)
	{
		echo "<script> alert('Usuário cadastrado com sucesso!'); parent.Limpar(); </script>";
	}
	else
	{
		echo "<script> alert('Não foi possível cadastrar o usuário!'); </script>";
	}
?>
<?php
	mysql_close($conexao);
?>