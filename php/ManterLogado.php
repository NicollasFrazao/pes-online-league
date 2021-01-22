<?php
	session_start();
	
	include "Conexao.php";
	
	$codigo = $_SESSION['Liga']['codigo'];
	
	$query = "update tb_usuario set dt_ultima_atividade = now() where cd_usuario = '$codigo'";
	$result = mysql_query($query) or die(mysql_error());
	
	$query_Busca = "select cd_usuario, dt_ultima_atividade, ic_logado from tb_usuario";
			
	$result_Busca = mysql_query($query_Busca) or die(mysql_error());
	$linha_Busca = mysql_fetch_assoc($result_Busca);
	$totalLinha_Busca = mysql_num_rows($result_Busca);
	
	do
	{
		$codigo = $linha_Busca['cd_usuario'];
		
		if ($linha_Busca['dt_ultima_atividade'] != "")
		{
			$atividadeAntiga = strtotime($linha_Busca['dt_ultima_atividade']);
			$atividadeAtual = strtotime(date("Y-m-d H:i:s"));
			
			$statusAtual = $linha_Busca['ic_logado'];
			
			$diferenca = $atividadeAtual - $atividadeAntiga;
			$diferenca = $diferenca/60;

			if ($diferenca >= 10)
			{
				$logado = 0;
			}
			else
			{
				$logado = 1;
			}
			
			if ($statusAtual == 0)
			{
				$logado = 0;
			}
		}
		else
		{
			$logado = 0;
		}
		
		echo "<br>".$codigo." - ".$logado." - ".$diferenca;
		
		$query = "update tb_usuario set ic_logado = '$logado' where cd_usuario = '$codigo'";
		$result = mysql_query($query) or die(mysql_error());
	}
	while ($linha_Busca = mysql_fetch_assoc($result_Busca));
	
	mysql_close($conexao);
?>