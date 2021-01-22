<?php
	session_start();
	
	$session = 0;
	$cookie = 0;
	$nickCookie = "";
	$senhaCookie = "";
	
	if((isset ($_SESSION['Liga']['nick']) == true) and (isset ($_SESSION['Liga']['senha']) == true)) 
	{ 
		$session = 1;
	}
	else if ((isset($_COOKIE['Liga']['nick']) == true) and (isset($_COOKIE['Liga']['senha']) == true))
	{
		$cookie = 1;
		$nickCookie = $_COOKIE['Liga']['nick'];
		$senhaCookie = base64_decode($_COOKIE['Liga']['senha']);
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="Utf-8">
		<script src="script/jquery.min.js"></script>
		<title>Liga Online</title>
		<style>
			*
			{
				margin: 0px;
				padding: 0px;
				font-family: century gothic;
				outline: none;
				overflow: hidden;
			}
			
			.all
			{
				display: inline-block;
				width: 100%;
				height: 100%;
			}
			
			.barra_superior
			{
				display: inline-block;
				background-color: RGBA(0,0,0,0.7);
				width: 100%;
				height: 14%;
				position: absolute;
				box-shadow: 0px 0px 5px 0px black;
				z-index: 9997;
			}
			
			#logo_imagem
			{
				z-index: 9999;
			}
			
			#menu
			{
				display: inline-block;
				background-color: transparent;
				height: 80px;
				position: absolute;
				top: 30px;
				right: 7%;
			}
			
			
			#menu input
			{
				display: inline-block;
				background-color: transparent;
				color: white;
				border: 0px;
				padding: 20px;
				text-shadow 1px 0px black;
			}
			
			#menu input:hover
			{
				color: white;
				background-color: #c00000;
			}
			
			#home
			{
				display: none;
				width: 100%;
				height: 100%;
				background-size: 100%;
				background-repeat: no-repeat;
				background-attachment: fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				position: absolute;				
			}
			
			#logo
			{
				display: inline-block;
				width: 120px;
				margin-top: 2%;
				margin-left: 5%;
				z-index: 9999;
			}
			
			.barra_inferior
			{
				display: inline;
				background-color: RGBA(0,0,0,0.7);
				width: 100%;
				height: 6%;
				bottom: 0px;
				position: absolute;
				font-size: 12px;
				text-shadow: 1px 0px black;
			}
			
			#login
			{
				display: none;
				background-color: RGBA(255,255,255,0.8);
				z-index: 9999;
				width: 380px;
				height: 380px;
				margin-left: -190px;
				margin-top: -190px;
				top:50%;
				left: 50%;
				position: fixed;
				box-shadow: 0px 0px 3px 0px black;
			}
			
			#titulo_login
			{
				display: inline-block;
				width: 88%;
				background-color: #c00000;
				color: white;
				padding: 6%;
				font-size: 14px;
				text-shadow: 1px 0px black;
			}
			
			#Frm_Login
			{
				display: inline-block;
				width: 88%;
				padding: 6%;
			}
			
			#tabela_login
			{
				display: inline-block;
				width: 100%;
			}
			
			#tabela_login tr
			{
				display: inline-block;
				width: 100%;
			}
			
			#tabela_login td
			{
				display: inline-block;
				width: 100%;
			}
			
			#tabela_login label
			{
				display: inline-block;
				width: 100%;
				color: #c00000;
				font-size: 14px;
			}
			
			#tabela_login input
			{
				display: inline-block;
				width: 100%;
				height: 22px;
				border: 0px;
				padding: 2px;
				box-shadow: 0px 0px 1px 0px gray;
			}
			
			.barra_inferior label
			{
				display: inline-block;
				width: 100%;
				color: white;
				margin-top: 12px;
			}
			
			#tabela_login #btn_cadastro
			{
				display: inline-block;
				background-color: transparent;
				color: #c00000;
				width: 48%;
				height: 26px;
				border: 0px;
				box-shadow: 0px 0px 0px 0px white;
			}
			
			#tabela_login #btn_cadastro:hover
			{
				font-weight: bold;
			}
			
			#tabela_login #btn_acesso
			{
				display: inline-block;
				background-color: #c00000;
				color: white;
				width: 50%;
				height: 26px;
				border: 0px;
			}
			
			#tabela_login #btn_acesso:hover
			{
				background-color: #cc1111;
			}
			
			#buttondown
			{
				display: inline-block;
				width: 110px;
				height: 30px;
				position: fixed;
				bottom: 54px;
				margin-left: 80%;
				opacity: 0.4;
			}
			
			#buttondown label
			{
				font-weight: bold; 
			}
			
			#buttondown img
			{
				position: absolute;
				width: 20%;
				margin-left: 10px;
			}
			
			#buttondown:hover
			{
				opacity: 1;
			}
			
			#sistema
			{
				display: none;
				width: 100%;
				height: 100%;
				background-color: gray;
				position: absolute;
			}
			
			#contato
			{
				display: none;
				width: 100%;
				height: 100%;
				position: absolute;
				background-image: url('imagens/02.jpg');
				background-size: 100%;
				background-repeat: no-repeat;
				background-attachment: fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
			}
			
			#cadastro
			{
				display: none;
				width: 100%;
				height: 100%;
				background-color: green;
				position: absolute;
				background-image: url('imagens/05.jpg');
				background-size: 100%;
				background-repeat: no-repeat;
				background-attachment: fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
			}
			
			#ncamc:hover
			{
				font-weight: bold;
			}
			
			#slider
			{
				position:absolute;
				width:100%;
				height:100%;
				top:0px;
				left:0px;
				z-index:-1;
			}
			
			#manchete
			{
				display: inline-block;
				width: 430px;
				height: 200px;
				background-color: transparent;
				margin-top: 40%;
				margin-left:50%;
				position: absolute;
			}
			
			#manchete h1
			{
				background-color: RGBA(0,0,0,0.8);
				padding: 10px;
				color: white;
				text-shadow: 1px 0px black;
				box-shadow: 0px 0px 2px 0px black;
			}
			
			#manchete h2
			{
				background-color: RGBA(192,0,0,0.0);
				padding: 10px;
				color: white;
				text-shadow: 1px 0px black;
			}
			
			#cobre
			{
				display: none;
				background-color: black;
				opacity: 0.8;
				width: 100%;
				height: 100%;
				z-index: 9998;
				position: absolute;
			}
			
			#btn_voltar
			{
				display:inline-block;
				font-size: 12px;
				margin-top: 20px;
				color: gray;
			}
			
			#btn_voltar:hover
			{
				color: #c00000;
			}
			
			#contato_int
			{
				display: inline-block;
				width: 900px;
				height: 400px;
				background-color: RGBA(255,255,255,0.9);
				position: absolute;
				top: 50%;
				left: 50%;
				margin-left: -450px;
				margin-top: -180px;
				box-shadow: 0px 0px 2px 0px gray;
			}
			
			#table_contato
			{
				padding: 30px;
			}
			
			#titulo_contato
			{
				font-size: 28px;
				color: #c00000;
				font-weight: bold;
				text-shadow: 1px 0px gray;
			}
			
			#contt
			{
				display: inline-block;
				color: #c00000;
				font-weight: bold;
				margin-top:20px;
				text-shadow: 1px 0px gray;
			}
			
			#subCont
			{
				display: inline-block;
				color: #000000;
				font-weight: bold;
			}
			
			#esquerda_contato
			{
				display: inline-block;
			}
			
			#direita_contato
			{
				display: inline-block;
				position: absolute;
				background-color: RGBA(0,0,0,0.7);
				height: 100%;
				right: 0px;
				width: 360px;
			}
			
			#table_mensagem
			{
				display: inline-block;
				padding: 30px;
			}
			
			#table_mensagem input
			{
				padding: 5px;
			}
			
			#table_mensagem label
			{
				display: inline-block;
				font-size: 12px;
				color: white;
			}
			
			#txt_assunto
			{
				display:inline-block;
				width: 100%;
			}
			
			#txt_mensagem
			{
				display:inline-block;
				width: 100%;
				height:120px;
				resize: none;
				padding: 5px;
			}
			
			#btn_enviar_mensagem
			{
				display: inloine-block;
				width: 100%;
				background-color: black;
				color: white;
				border: 0px solid black;
				text-shadow: 1px 0px gray;
			}
			
			#table_mensagem #titulo_contato_mensagem
			{
				font-size: 24px;
				color: #ffffff;
				font-weight: bold;
				text-shadow: 1px 0px black;
			}
			
			#cadastro_int #dss
			{
				display: inline-block;
				color: #c00000;
				font-size: 18px;
				font-weight: bold;
			}
			
			#cadastro_int
			{
				display: inline-block;
				position: absolute;
				top:50%;
				left: 50%;
				width: 390px;
				height: 480px;
				margin-top: -220px;
				background-color: RGBA(0,0,1,0.8);
			}
			
			#cadastro_int table
			{	
				display: inline-block;
				width: 100%;
				padding: 30px;
			}
			
			#cadastro_int input
			{
				display: inline-block;
				padding: 4px;
				width:  150px;
				font-size: 12px;
				border: 0px solid gray;
			}
			
			#cadastro_int label
			{
				font-size: 12px;
				color: white;
			}
			
			#cadastro_int #txt_nmCompleto, #cadastro_int #txt_email
			{
				display: inline-block;
				width: 100%;
			}
			
			#rdb_sexo_masculino, #rdb_sexo_feminino
			{
				display: inline-block;
				height: 15px;
				position: absolute;
				margin-top: 5px;
				margin-left: -55px;
			}
			
			#cadastro_int #tu
			{
				display: inline-block;
				margin-top: 6px;
				margin-left: -70px;
				position: absolute;
			}
			
			#cadastro_int #nns
			{
				display: inline-block;
				margin-left: 18px;
				margin-top: 6px;
				font-size: 12px;
			}
			
			#btn_limpar_cadastro
			{
				display: inline-block;
				background-color: transparent;
				color: white;
				border: 0px solid white;
				height: 30px;
			}
			
			#btn_limpar_cadastro:hover
			{
				color: #c00000;
			}
			
			#btn_cadastrar_cad
			{
				display: inline-block;
				background-color: #c00000;
				color: white;
				border: 0px solid white;
				height: 30px;
			}
			
			#btn_cadastrar_cad:hover
			{
				background-color: red;
			}
			
			#logologin
			{
				display: inline-block;
				height: 50px;
				margin-top:10px;
				margin-left: 20px;
				position: absolute;
			}
			
			#tabela_login #chk_continuar
			{
				display: inline-block;
				position: absolute;
				width: 20px;
				margin-right: 30px;
			}
			
			#tabela_login #lbl_mmc
			{
				display: inline-block;
				margin-left: 30px;
			}
		</style>
	</head>
	<body>
		<iframe id="Funcoes" name="Funcoes" style="display: none;">Navegador não suporta IFrame</iframe>
		<div id="cobre">
		
		</div>
		<div id="all">
		
			<div class="barra_superior">
				<div id="logo_imagem">
					<img id="logo" src="imagens/logo.svg">
				</div>
				<div id="menu">
					<table>
						<tr>
							<td>
								<input type="button" value="Home" id="btn_home">
							</td>
							<td>
								<input type="button" value="O Sistema" id="btn_sistema">
							</td>
							<td>
								<input type="button" value="Contato" id="btn_contato">
							</td>
							<td>
								<input type="button" value="Cadastro" id="btn_cadastra">
							</td>
							<td>
								<input type="button" value="Login" id="btn_login">
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="home">
				<div id="slider">
					<img src="imagens/00.jpg" width="100%" height="100%" />
				</div>
				<div id="manchete" onclick="man()">
					<h1 >Venha para o Liga Online</h1>
					<h2 >O mais novo sistema de torneios online baseados no game <br>Pro Evolution Soccer 2015</h2>
				</div>
			</div>
			<div id="sistema">
				
			</div>
			<div id="contato">
				<div id="contato_int">
					<div id="esquerda_contato">
						<table id="table_contato">
							<tr>
								<td>
									<label id="titulo_contato">Nossos Contatos</label>
								</td>
							</tr>
							
							<tr>
								<td>
									<label id="contt">Email</label>
								</td>
							</tr>
							
							<tr>
								<td>
									<label id="subCont">contato@example.com</label>
								</td>
							</tr>
							
							<tr>
								<td>
									<label id="contt">Telefone</label>
								</td>
							</tr>
							
							<tr>
								<td>
									<label id="subCont">(11) 3000-0000</label>
								</td>
							</tr>
							
							<tr>
								<td>
									<label id="contt">Desenvolvedores</label>
								</td>
							</tr>
							
							<tr>
								<td>
									<label id="subCont">www.anytech.com.br</label>
								</td>
							</tr>
						</table>
					</div>
					<div id="direita_contato">
						<form>
							<table id="table_mensagem">
								<tr>
									<td colspan="2">
										<label id="titulo_contato_mensagem">Deixe sua mensagem</label>
									</td>
								</tr>
								<tr>
									<td>
										<label>Nome</label>
									</td>
									<td>
										<label>Email</label>
									</td>
								</tr>
								<tr>
									<td>
										<input type="text">
									</td>
									<td>
										<input type="text">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<label>Assunto</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="text" id="txt_assunto">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<label>Mensagem</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<textarea id="txt_mensagem"></textarea>
									</td>
								</tr>
								<tr>
									<td>
									
									</td>
									<td>
										<input type="button" value="Enviar" id="btn_enviar_mensagem">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<div id="cadastro">
				<div id="cadastro_int">
					<form id="Frm_Dados" action="php/Cadastrar.php" target="Funcoes" method="POST">
						<table>
							<tr>
								<td colspan="2">
									<label id="dss">Dados do sistema</label>
								</td>	
							</tr>
							<tr>
								<td colspan="2">
									<label>Nome completo</label>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="text" id="txt_nmCompleto" name="nome" maxLength="50">									
								</td>
							</tr>
							
							<tr>
								<td>
									<label>Nickname</label>
								</td>
								<td>
									<label>Data de Nascimento</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="nick" id="txt_nickname" maxLength="20">				
								</td>
								<td>
									<input type="text" name="datanas" id="txt_datanas" maxLength="10">									
								</td>
							</tr>
							
							<tr>
								<td>
									<label>Telefone</label>
								</td>
								<td>
									<label>CPF</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="telefone" id="txt_telefone" maxLength="14">									
								</td>
								<td>
									<input type="text" name="cpf" id="txt_cpf" maxLength="14">									
								</td>
							</tr>
							<tr>
								<td id="sexo">
									<label>Sexo</label>
								</td>
							</tr>
							
							<tr>
								<td>
									<label id="sexo">Masculino</label>
									<input id="rdb_sexo_masculino" type="radio" name="sexo" value="Masculino" checked="true">
								</td>
								<td>
									<label id="sexo">Feminino</label>
									<input id="rdb_sexo_feminino" type="radio" name="sexo" value="Feminino">
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
								<br>
									<label>Email</label>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="text" id="txt_email" name="email" maxLength="50">									
								</td>
							</tr>
							
							<tr>
								<td>
									<label>Senha</label>
								</td>
								<td>
									<label>Confirmar Senha</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="password" name="senha" id="txt_senha" maxLength="12">									
								</td>
								<td>
									<input type="password" name="confirmaSenha" id="txt_confirmarSenha" maxLength="12">									
								</td>
							</tr>
							
							<tr>
								<td colspan="2" class="eu">
									<input type="checkbox" id="tu"><label id="nns"> Li e concordo com os <a id="TUP">Termos de Uso e Privacidade.</a></label>
								</td>
							</tr>
							<tr>
								<td>
									<br>
									<input type="reset" value="Limpar" id="btn_limpar_cadastro" onclick="Limpar();">
								</td>
								<td align="right">
									<br>
									<input type="button" value="Cadastrar" id="btn_cadastrar_cad" onclick="Validar();">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div id="login">
				<img src="imagens/logo.svg" id="logologin">
					<h1 id="titulo_login" style="padding-left:100px; height: 20px;"></h1>
					<form id="Frm_Login"  action="php/Login.php" target="Funcoes" method="POST">
						<table id="tabela_login">
							<tr>
								<td>
									<label>Nickname</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="nick" id="txt_nickname_login">
								</td>
							</tr>
							
							<tr>
								<td>
								<br>
									<label>Senha</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="password" name="senha" id="txt_senha_login">
								</td>
							</tr>
							<tr>
								<td>
									<input name="continuar" type="checkbox" id="chk_continuar" value="1" ><label id="lbl_mmc">Manter-me conectado.</label>
								</td>
							</tr>							
							<tr>
								<td align="right">
									<br>
									<input type="button" value="Cadastre-se!" id="btn_cadastro">
									<input type="button" value="Acessar" id="btn_acesso" onclick="Logar();">
								</td>
							</tr>
							<tr>
								<td align="center">
									<br>
									<label id="ncamc">Não consigo acessar minha conta!</label>
								</td>
							</tr>
						</table>
						<h1 id="btn_voltar">◄ Voltar</h1>
					</form>
				</div>
			<div class="barra_inferior" align="center">
				<label>Anytech © 2015</label>
			</div>
		</div>
		
	</body>
	<script src="script/Cadastro - Validação.js"></script>
	<script>
		window.onload = function()
		{
			home.style.display = "inline-block";
			btn_home.style.borderBottom= "1px solid white";
			btn_contato.style.borderBottom = "0px solid white";
			btn_sistema.style.borderBottom = "0px solid white";
			btn_cadastra.style.borderBottom = "0px solid white";
			btn_login.style.borderBottom = "0px solid white";
			sistema.style.display = "none";
			contato.style.display = "none";
			cadastro.style.display = "none";
		}
		
		btn_home.onclick = function()
		{
			btn_contato.style.borderBottom = "0px solid white";
			btn_sistema.style.borderBottom = "0px solid white";
			btn_cadastra.style.borderBottom = "0px solid white";
			btn_login.style.borderBottom = "0px solid white";
			sistema.style.display = "none";
			contato.style.display = "none";
			cadastro.style.display = "none";
		}
		
		btn_contato.onclick = function()
		{
			btn_home.style.borderBottom = "0px solid white";
			btn_sistema.style.borderBottom = "0px solid white";
			btn_cadastra.style.borderBottom = "0px solid white";
			btn_login.style.borderBottom = "0px solid white";
			home.style.display = "none";
			sistema.style.display = "none";
			cadastro.style.display = "none";	
		}
		
		btn_cadastra.onclick = function()
		{
			btn_home.style.borderBottom = "0px solid white";
			btn_contato.style.borderBottom = "0px solid white";
			btn_sistema.style.borderBottom = "0px solid white";
			btn_login.style.borderBottom = "0px solid white";
			home.style.display = "none";
			sistema.style.display = "none";
			contato.style.display = "none";
		}
		
		btn_sistema.onclick = function()
		{
			btn_home.style.borderBottom = "0px solid white";
			btn_contato.style.borderBottom = "0px solid white";
			btn_cadastra.style.borderBottom = "0px solid white";
			btn_login.style.borderBottom = "0px solid white";
			home.style.display = "none";
			contato.style.display = "none";
			cadastro.style.display = "none";
		}
		
		
		btn_cadastro.onclick = function()
		{
			cobre.click();
			btn_cadastra.click();
		}
		
		cobre.onclick = function()
		{
			//desabilitarLogin();
		}
		
		function desabilitarLogin()
		{
			cobre.style.display = "none";
			login.style.display = "none";
		}
		
		function man()
		{
			btn_cadastra.click();
		}

		

		var id = 0;
		var imgs = new Array();
		imgs[0] = "imagens/00.jpg";
		imgs[1] = "imagens/01.jpg";
		imgs[2] = "imagens/02.jpg";
		imgs[3] = "imagens/03.jpg";
		imgs[4] = "imagens/04.jpg";
		imgs[5] = "imagens/05.jpg";
		imgs[6] = "imagens/06.jpg";
		//Aqui apenas adicione mais imagens
		function troca(){
			if (id<imgs.length-1){
			id++;	
			}else{
				id=0
			}
			$("#slider").fadeOut(200);
			setTimeout("$('#slider').html('<img src=\""+imgs[id]+"\" width=\"100%\" height=\"100%\" />');$('#slider').fadeIn(200);",200);
		}
		var segundos = 8; //Segundos entre cada imagem
		setInterval("troca();",segundos*600);
		
		//SlideDown
		
	
		
		 $("#btn_contato").click(function(event){
				if(contato.style.display == "none")	
				{
					$("#home").css('display', 'none');
					$("#contato").css('display', 'none');
					$("#cadastro").css('display', 'none');
					$("#sistema").css('display', 'none');
					$("#login").css('display', 'none');
					$("#cobre").css('display', 'none');
					$("#contato_int").css('display', 'none');
					event.preventDefault();
					$("#contato").css('display', 'inline-block');
					$("#contato_int").slideDown(500);
					$("#btn_contato").css("border-bottom","1px solid white");
				}
		   });
		   
		 $("#btn_home").click(function(event){
				if(home.style.display == "none")
				{
					$("#home").css('display', 'none');
					$("#contato").css('display', 'none');
					$("#cadastro").css('display', 'none');
					$("#sistema").css('display', 'none');
					$("#login").css('display', 'none');
					$("#cobre").css('display', 'none');
					$("#manchete").css('display', 'none');
					event.preventDefault();
					$("#home").css('display', 'inline-block');
					$("#manchete").toggle("slide");
					$("#btn_home").css("border-bottom","1px solid white");
				}
		   });
		   
		   
		 $("#btn_cadastra").click(function(event){
				if(cadastro.style.display == "none")
				{
					Limpar();
					
					$("#home").css('display', 'none');
					$("#contato").css('display', 'none');
					$("#cadastro").css('display', 'none');
					$("#sistema").css('display', 'none');
					$("#login").css('display', 'none');
					$("#cobre").css('display', 'none');		 
					$("#cadastro_int").css('display', 'none');		 
					event.preventDefault();
					$("#cadastro").css('display', 'inline-block');
					$("#cadastro_int").slideDown(500);
					$("#btn_cadastra").css("border-bottom","1px solid white");
				}
		   });
		
		 $("#btn_sistema").click(function(event){
				if(sistema.style.display == "none")
				{
					$("#home").css('display', 'none');
					$("#contato").css('display', 'none');
					$("#cadastro").css('display', 'none');
					$("#sistema").css('display', 'none');
					$("#login").css('display', 'none');
					$("#cobre").css('display', 'none');					 
					event.preventDefault();
					$("#sistema").slideDown(500);
					$("#btn_sistema").css("border-bottom","1px solid white");
				}
		   });
		   
		   $("#btn_login").click(function(event){
				if (<?php echo $session; ?> == 1)
				{
					window.location.href = "HomeUser.php";
				}
				else if (<?php echo $cookie; ?> == 1)
				{
					txt_nickname_login.value = "<?php echo $nickCookie; ?>";
					txt_senha_login.value = "<?php echo $senhaCookie; ?>";
					Logar();
				}
				else
				{
					$("#cobre").fadeIn(200);
					$("#login").fadeIn(500);
				}

				LimparLogin();
		   });
		   
		   $("#btn_voltar").click(function(event){
				$("#cobre").fadeOut(500);
				$("#login").fadeOut(200);
		   });
		   
		    $("#cobre").click(function(event){
				$("#cobre").fadeOut(500);
				$("#login").fadeOut(200);
		   });
		
		function Limpar()
		{
			txt_nmCompleto.value = "";
			txt_nickname.value = "";
			txt_datanas.value = "";
			txt_telefone.value = "";
			txt_cpf.value = "";
			rdb_sexo_masculino.checked = true;
			rdb_sexo_feminino.checked = false;
			txt_email.value = "";
			txt_senha.value = "";
			txt_confirmarSenha.value = "";
			tu.checked = false;
			
			LimparBorda();
		}
		
		function Logar()
		{
			if (txt_nickname_login.value != "" && txt_senha_login.value != "")
			{
				Frm_Login.submit();
			}
		}
		
		function LimparLogin()
		{
			txt_nickname_login.value = "";
			txt_senha_login.value = "";
		}
	</script>
</html>