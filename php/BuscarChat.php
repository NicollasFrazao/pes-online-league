<?php
	session_start();
	
	include "Conexao.php";
	
	$codigo = $_SESSION['Liga']['codigo'];
	$codigoAmigo = $_GET['codigoAmigo'];
	
	$query_Mensagens = "select distinct tb_usuario.nm_nickname, tb_mensagem.nm_mensagem, tb_mensagem.dt_mensagem
						  from usuario_amigo inner join tb_mensagem
								on usuario_amigo.cd_usuario = tb_mensagem.cd_usuario
								  inner join tb_usuario
									on tb_mensagem.cd_usuario = tb_usuario.cd_usuario
								  where (usuario_amigo.cd_usuario = '$codigo' and usuario_amigo.cd_amigo = '$codigoAmigo' and tb_mensagem.cd_usuario = '$codigo' and tb_mensagem.cd_amigo = '$codigoAmigo') or (usuario_amigo.cd_usuario = '$codigoAmigo' and usuario_amigo.cd_amigo = '$codigo' and tb_mensagem.cd_usuario = '$codigoAmigo' and tb_mensagem.cd_amigo = '$codigo')
									order by tb_mensagem.cd_mensagem";
	$result_Mensagens = mysql_query($query_Mensagens) or die(mysql_error());
	$linha_Mensagens = mysql_fetch_assoc($result_Mensagens);
	$totalLinha_Mensagens = mysql_num_rows($result_Mensagens);
	
	function ConfereQuebra()
	{
		switch (strtoupper(substr(PHP_OS, 0, 3))) 
		{
			// Windows
			case 'WIN':
			{
				$quebra = "\r\n";
			}
			break;

			// Mac
			case 'DAR':
			{
				$quebra = "\r";
			}
			break;

			// Unix
			default:
			{
				$quebra = "\n";
			}
		}
		
		return $quebra;
	}
?>
<script>
	function InsereMensagem(texto, codigoAmigo, nomeDiz)
	{
		aux = texto.split("&&quebra&&");
		
		for (cont = 0; cont <= aux.length - 1; cont = cont + 1)
		{
			eval('parent.txt_output_chat' + codigoAmigo + '.value = parent.txt_output_chat' + codigoAmigo + '.value + "' + nomeDiz + ' diz: \\n" + aux[cont] + "\\n--------------\\n";');
		}
	}
</script>
<?php
	echo "<script> parent.txt_output_chat$codigoAmigo.value = ''; </script>";
	do
	{
		$nmDiz = $linha_Mensagens['nm_nickname'];
		$mensagem = $linha_Mensagens['nm_mensagem'];
		$data = $linha_Mensagens['dt_mensagem'];
		
		echo "<script> InsereMensagem('".str_replace(ConfereQuebra(), "&&quebra&&", $mensagem)."', '".$codigoAmigo."', '".$nmDiz."'); </script>";
	}
	while($linha_Mensagens = mysql_fetch_assoc($result_Mensagens));
	
	mysql_close($conexao);
	
	echo "<script> parent.txt_output_chat$codigoAmigo.scrollTop = parent.txt_output_chat$codigoAmigo.scrollHeight; parent.Chat.src = ''; </script>";
?>