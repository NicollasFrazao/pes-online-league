<?php
	session_start();
	
	include "php/Conexao.php";
	
	if((!isset ($_SESSION['Liga']['nick']) == true) and (!isset ($_SESSION['Liga']['senha']) == true)) 
	{ 
		unset($_SESSION['Liga']);
		
		setcookie("Liga[nick]", "", time()-3600, "/");
		setcookie("Liga[senha]", "", time()-3600, "/");
		
		header('location: index.php'); 
	}
	
	$logado = $_SESSION['Liga']['nick'];
	$codigo = $_SESSION['Liga']['codigo'];
	
	$query_Busca_Plataforma = "select * from tb_plataforma order by nm_plataforma";
			
	$result_Busca_Plataforma = mysql_query($query_Busca_Plataforma) or die(mysql_error());
	$linha_Busca_Plataforma = mysql_fetch_assoc($result_Busca_Plataforma);
	$totalLinha_Busca_Plataforma = mysql_num_rows($result_Busca_Plataforma);	
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Inicio</title>
		<style>
			*
			{
				padding: 0;
				margin: 0;
				overflow:hidden;
				font-family:Century Gothic;	
				outline: none;
			}
			
			#all
			{
				display: inline-block;
				width: 98%;
				height: 85%;
				position: absolute;
				margin-top: 85px;
				margin-left: 1%;
				background-color: transparent;
			}
			
			#inicio_central
			{
				display: inline-block;
				width: 900px;
				height: 500px;
				position: absolute;
				top: 50%;
				left: 50%;
				margin-top: -200px;
				margin-left: -450px;
				background-color: transparent;
			}
			
			#inicio_central table
			{
				display: inline-block;
				width: 400px;
			}
			
			#lbl_mc
			{
				display: inline-block;
				width: 100%;
				padding: 5px;
				background-color: #c00000;
				color: white;
				padding-left: 20px;
				font-weight: bold;
			}
			
			#user_conta
			{
				display: inline-block;
				width: 400px;
				height: 80px;
				padding: 10px;
				background-color: RGBA(255,255,255,0.7);
				color: white;
				margin-top:5px;
				box-shadow: 0px 0px 14px 0px gray;
			}
			
			#user_conta:hover
			{
				background-color: RGBA(255,255,255,0.9);
			}
			
			#icontrol
			{
				display: inline-block;
				width: 80px;
				margin-right: 20px;
			}
			
			#lbl_conta
			{
				display: inline-block;
				color: #c00000;
				font-size: 22px;
				font-weight: bold;
				text-shadow: 1px 0px gray;
			}
			
			#conta_login
			{
				display: inline-block;
				color: black;
				font-weight: bold;
				font-size: 14px;
				text-shadow: 1px 0px gray;
			}
			
			#conta_liga_dados
			{
				display: none;
				width: 400px;
				height: 100%;
				padding:30px;
				padding-top:50px;
				background-color: RGBA(255,255,255,0.9);
				margin:5px;
				top: 0px;
				position: relative;
				box-shadow: 0px 0px 4px 0px gray;
			}
			
			#conta_psn_dados
			{
				display: none;
				width: 400px;
				height: 99%;
				padding:30px;
				padding-top:50px;
				background-color: RGBA(255,255,255,0.9);
				margin:5px;
				box-shadow: 0px 0px 4px 0px gray;
			}
			
			#conta_xlive_dados
			{
				display: none;
				width: 400px;
				height: 99%;
				padding:30px;
				padding-top:50px;
				background-color: RGBA(255,255,255,0.9);
				margin:5px;
				box-shadow: 0px 0px 4px 0px gray;
			}
			
			#txt_in_psn
			{
				display: inline-block;
				width: 100%;
				padding:5px;
				font-size: 18px;
			}
			
			#txt_in_psn:focus
			{
				border: 1px solid red;
			}
			
			#btn_cadastra_psn
			{
				display: inline-block;
				width: 100px;
				background-color: #c00000;
				height: 30px;
				border: 0px;
				color: white;
				box-shadow: 0px 0px 1px 0px gray;
			}
			
			#txt_in_xlive:focus
			{
				border: 1px solid #c00000;
			}
			
			#txt_in_xlive
			{
				display: inline-block;
				width: 100%;
				padding:5px;
				font-size: 18px;
			}
			
			#btn_cadastra_xlive
			{
				display: inline-block;
				width: 100px;
				background-color: #c00000;
				height: 30px;
				border: 0px;
				color: white;
				box-shadow: 0px 0px 1px 0px gray;
			}
			
			#login_geral
			{
				font-size: 22px;
				font-weight: bold;
				color: #c00000;
				text-shadow: 1px 0px white;
			}
			
			#cadastre_conta
			{
				font-size: 22px;
				font-weight: bold;
				color: #c00000;
				text-shadow: 1px 0px white;
			}
			
			#lbl_data
			{
				display: inline-block;
				font-size: 12px;
				font-weight: bold;
				color: black;
				margin-top:10px;
			}
			
			#lbl_data_in
			{
				font-size: 18px;
				color: #555;
				text-shadow: 0px 0px gray;
			}
		</style>
	</head>
	<body>
		<div id="all">
			<div id="inicio_central">
				<table>
					<tr>
						<td>
							<table>
								<tr>
									<td>
										<label id="lbl_mc">Minhas Contas</label>
									</td>
								</tr>
								<tr>
									<td>
										<div id="user_conta" class="cLiga">
											<table>
												<tr>
													<td>
														<img src="imagens/icontrol.png" id="icontrol">
													</td>
													<td>
														<table>
															<tr>
																<td>
																	<label id="lbl_conta">LIGA ONLINE</label>
																<td>
															<tr>
															<tr>
																<td>
																	<label id="conta_login">Jogador123</label>
																<td>
															<tr>
														</table>
													</td>
												</tr>
											</table>
										</div>
									</td>
								</tr>
								<!-- Plataformas -->
								<?php
									do
									{
										$cdPlataforma = $linha_Busca_Plataforma['cd_plataforma'];
										
										$query_Busca_Plataforma_Conta = "select usuario_plataforma.nm_nickname
																		  from tb_usuario inner join usuario_plataforma
																			on tb_usuario.cd_usuario = usuario_plataforma.cd_usuario
																			  inner join tb_plataforma
																				on usuario_plataforma.cd_plataforma = tb_plataforma.cd_plataforma
																					where tb_usuario.cd_usuario = '$codigo' and tb_plataforma.cd_plataforma = '$cdPlataforma'";
												
										$result_Busca_Plataforma_Conta = mysql_query($query_Busca_Plataforma_Conta) or die(mysql_error());
										$linha_Busca_Plataforma_Conta = mysql_fetch_assoc($result_Busca_Plataforma_Conta);
										$totalLinha_Busca_Plataforma_Conta = mysql_num_rows($result_Busca_Plataforma_Conta);
										
										if ($linha_Busca_Plataforma_Conta['nm_nickname'] != "")
										{
											$nickname = $linha_Busca_Plataforma_Conta['nm_nickname'];
										}
										else
										{
											$nickname = "Você não possui uma conta";
										}
								?>
										<tr>
											<td>
												<div id="user_conta" class="c<?php echo $linha_Busca_Plataforma['nm_plataforma']?>">
													<table>
														<tr>
															<td>
																<img src="imagens/icontrol.png" id="icontrol">
															</td>
															<td>
																<table>
																	<tr>
																		<td>
																			<label id="lbl_conta"><?php echo $linha_Busca_Plataforma['nm_plataforma']; ?></label>
																		<td>
																	<tr>
																	<tr>
																		<td>
																			<label id="conta_login"><?php echo $nickname; ?></label>
																		<td>
																	<tr>
																</table>
															</td>
														</tr>
													</table>
												</div>
											</td>
										</tr>
								<?php
									}
									while($linha_Busca_Plataforma = mysql_fetch_assoc($result_Busca_Plataforma));
								?>
							</table>
						</td>
						<td>
							<div id="conta_liga_dados">
								<table>
									<tr>
										<td>
											<label id="login_geral">Jogador</label>
										</td>
									</tr>
									<tr>
										<td>
											<label id="lbl_data">Nome</label>
										</td>
									</tr>
									<tr>
										<td>
											<label id="lbl_data_in">Jogador123</label>
										</td>
									</tr>
									<tr>
										<td>
											<label id="lbl_data">Data de Nascimento</label>
										</td>
									</tr>
									<tr>
										<td>
											<label id="lbl_data_in">01/01/2000</label>
										</td>
									</tr>
									<tr>
										<td>
											<label id="lbl_data">Sexo</label>
										</td>
									</tr>
									<tr>
										<td>
											<label id="lbl_data_in">Masculino</label>
										</td>
									</tr>
									<tr>
										<td>
											<label id="lbl_data">Email</label>
										</td>
									</tr>
									<tr>
										<td>
											<label id="lbl_data_in">usuario@example.com</label>
										</td>
									</tr>
								</table>
							</div>
						</td>
						<td>
							<div id="conta_psn_dados">
								<table>
									<tr>
										<td>
										<br><br>
											<label id="cadastre_conta">Cadastre sua conta PSN</label><br><br>
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" id="txt_in_psn"><br><br>
										</td>
									</tr>
									<tr>
										<td align="right">
											<input type="button" id="btn_cadastra_psn" value="Cadastrar">
										</td>
									</tr>
								</table>
							</div>
						</td>
						<td>
							<div id="conta_xlive_dados">
								<table>
									<tr>
										<td>
										<br><br>
											<label id="cadastre_conta">Cadastre sua conta Xbox Live</label><br><br>
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" id="txt_in_xlive"><br><br>
										</td>
									</tr>
									<tr>
										<td align="right">
											<input type="button" id="btn_cadastra_xlive" value="Cadastrar">
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
	<script src="script/jquery.min.js"></script>
	<script>
		document.getElementsByClassName('cLiga')[0].onclick = function()
		{
			$("#conta_liga_dados").toggle('slide');	
		}
	</script>
</html>
<?php
	mysql_close($conexao);
?>