<?php
	include ("Conexao.php");
	
	session_start();
	unset($_SESSION['Liga']);
	
	$nick = $_POST['nick'];
	$senha = base64_encode($_POST['senha']);
	
	if (isset($_POST['continuar']))
	{
		$continuar = $_POST['continuar'];
	}
	else
	{
		$continuar = 0;
	}
	
	$verifica = mysql_query("select nm_email from tb_usuario where nm_nickname = '$nick' and cd_senha = '$senha'") or die(mysql_error());
	
	if (mysql_num_rows($verifica) <= 0)
	{
		unset($_SESSION['Liga']);
		
		setcookie("Liga[nick]", "", time()-3600, "/");
		setcookie("Liga[senha]", "", time()-3600, "/");
		
		echo "<script> alert('Login e/ou senha incorretos!'); parent.LimparLogin(); parent.Funcoes.src = '';</script>";
	}
	else
	{
		if ($continuar == 1)
		{
			setcookie("Liga[nick]", $nick, time() + (86400 * 1), "/"); // 86400 = 1 day
			setcookie("Liga[senha]", $senha, time() + (86400 * 1), "/"); // 86400 = 1 day
		}
		else
		{
			setcookie("Liga[nick]", "", time()-3600, "/");
			setcookie("Liga[senha]", "", time()-3600, "/");
		}
		
		$query = "select cd_usuario, ic_tipo, ic_confirmado from tb_usuario where nm_nickname = '$nick'";
		$result = mysql_query($query) or die(mysql_error());
		$linha = mysql_fetch_assoc($result);
		
		$codigo = $linha['cd_usuario'];
		$tipo = $linha['ic_tipo'];
		$confirmado = $linha['ic_confirmado'];
		
		$_SESSION['Liga']['codigo'] = $codigo;
		$_SESSION['Liga']['nick'] = $nick;
		$_SESSION['Liga']['senha'] = $senha;
		$_SESSION['Liga']['tipo'] = $tipo;
		$_SESSION['Liga']['confirmado'] = $confirmado;
		
		$query = "update tb_usuario set ic_logado = 1, dt_ultima_atividade = now() where cd_usuario = '$codigo'";
		$result = mysql_query($query) or die(mysql_error());
		
		echo "<script> parent.LimparLogin(); parent.window.location = '../HomeUser.php'; </script>";
	}
?>

<?php
	mysql_close($conexao);
?>