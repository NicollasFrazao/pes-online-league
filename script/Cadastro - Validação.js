//------------- camposCorretos

var camposCorretos = new Array(9);

//-------------- Mascaras

function mascaraData(valorCampo) //--------------- Mascara Data
{
	var auxtroca,auxvetor;
	
	if (valorCampo.length == 2 && valorCampo.charAt(2) != '/')
	{
		auxvetor = valorCampo.split("");
		auxvetor[2] = "/";
		
		valorCampo = "";	
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	
	if (valorCampo.length == 5 && valorCampo.charAt(5) != '/')
	{
		auxvetor = valorCampo.split("");
		auxvetor[5] = "/";
		
		valorCampo = "";	
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	
	if (valorCampo.length == 8 && valorCampo.indexOf('/') == -1)
	{
		auxvetor = "##/##/####";
		auxvetor = auxvetor.split("");
		aux = valorCampo.split("");
		
		auxvetor[0] = aux[0];
		auxvetor[1] = aux[1];
		
		auxvetor[3] = aux[2];
		auxvetor[4] = aux[3];
		
		auxvetor[6] = aux[4];
		auxvetor[7] = aux[5];
		auxvetor[8] = aux[6];
		auxvetor[9] = aux[7];
		
		valorCampo = "";	
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	
	return valorCampo;
}

function mascaraFixo(valorCampo) //--------------- Mascara Telefone Fixo
{
	var auxtroca,auxvetor;
	
	if (valorCampo.length == 0 && valorCampo.charAt(0) != '(')
	{
		auxvetor = valorCampo.split("");
		auxvetor[0] = "(";
		
		valorCampo = "";
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	
	if (valorCampo.length == 3 && valorCampo.charAt(3) != ')')
	{
		auxvetor = valorCampo.split("");
		auxvetor[3] = ")";
		
		valorCampo = "";
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	
	if (valorCampo.length == 4 && valorCampo.charAt(4) != " ")
	{
		auxvetor = valorCampo.split("");
		auxvetor[4] = " ";
		
		valorCampo = "";
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	
	if (valorCampo.length == 10 && valorCampo.indexOf('(') == -1 && valorCampo.indexOf(')') == -1 && valorCampo.indexOf(" ") == -1 && valorCampo.indexOf('-') == -1)
	{
		auxvetor = "(##) ####-####";
		auxvetor = auxvetor.split("");
		aux = valorCampo.split("");
		
		auxvetor[1] = aux[0];
		auxvetor[2] = aux[1];
		
		auxvetor[5] = aux[2];
		auxvetor[6] = aux[3];
		auxvetor[7] = aux[4];
		auxvetor[8] = aux[5];
		
		auxvetor[10] = aux[6];
		auxvetor[11] = aux[7];
		auxvetor[12] = aux[8];
		auxvetor[13] = aux[9];
		valorCampo = "";
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	else
	{
		if (valorCampo.length == 9 && valorCampo.charAt(9) != '-')
		{
			auxvetor = valorCampo.split("");
			auxvetor[9] = "-";
			
			valorCampo = "";
			for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
			{
				valorCampo = valorCampo + auxvetor[cont];
			}
		}
	}
	
	return valorCampo;
}

function mascaraCPF(valorCampo) //---------------- Mascara CPF
{
	var auxtroca,auxvetor;
	
	if (valorCampo.length == 3 && valorCampo.charAt(3) != '.')
	{
		auxvetor = valorCampo.split("");
		auxvetor[3] = ".";
		
		valorCampo = "";
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	
	if (valorCampo.length == 7 && valorCampo.charAt(7) != '.')
	{
		auxvetor = valorCampo.split("");
		auxvetor[7] = ".";
		
		valorCampo = "";
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	
	if (valorCampo.length == 11 && valorCampo.charAt(11) != '-')
	{
		auxvetor = valorCampo.split("");
		auxvetor[11] = "-";
		
		valorCampo = "";
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
	
	if (valorCampo.length == 11 && valorCampo.indexOf('.') == -1 && valorCampo.indexOf('-') == -1)
	{
		auxvetor = "###.###.###-##";
		auxvetor = auxvetor.split("");
		aux = valorCampo.split("");
		
		auxvetor[0] = aux[0];
		auxvetor[1] = aux[1];
		auxvetor[2] = aux[2];
		
		auxvetor[4] = aux[3];
		auxvetor[5] = aux[4];
		auxvetor[6] = aux[5];
		
		auxvetor[8] = aux[6];
		auxvetor[9] = aux[7];
		auxvetor[10] = aux[8];
		
		auxvetor[12] = aux[9];
		auxvetor[13] = aux[10];
			
		valorCampo = "";
		for (cont = 0; cont <= auxvetor.length - 1; cont = cont + 1)
		{
			valorCampo = valorCampo + auxvetor[cont];
		}
	}
		
	return valorCampo;
}

//--------------- Nome

var campoNomeCompleto = document.querySelector("#txt_nmCompleto");

function verificarNomeCompleto()
{
	var tamanho, cont;
	var palavra, copia = "";
	
	campoNomeCompleto.value = campoNomeCompleto.value.trim();
	if (campoNomeCompleto.value != "")
	{
		tamanho = campoNomeCompleto.value.length;
		palavra = campoNomeCompleto.value;
		for (cont = 0; cont <= tamanho - 1; cont = cont + 1)
		{
			if (cont == 0)
			{
				copia = copia + palavra.charAt(cont).toUpperCase();
			}
			else if (palavra.charAt(cont) == " ")
			{
				if (palavra.charAt(cont + 1) != " ")
				{
					copia = copia + " " + palavra.charAt(cont + 1).toUpperCase();
					cont = cont + 1;
				}
			}
			else
			{
				copia = copia + palavra.charAt(cont);
			}
		}
		campoNomeCompleto.value = copia;
		
		if (campoNomeCompleto.value.indexOf(" ") == -1)
		{
			campoNomeCompleto.style.border = "2px solid red";
			camposCorretos[0] = 0;
		}
		else
		{
			campoNomeCompleto.style.border = "2px solid green";
			camposCorretos[0] = 1;
		}
	}
	else
	{
		campoNomeCompleto.style.border = "2px solid red";
		camposCorretos[0] = 0;
	}
}

campoNomeCompleto.onkeypress = function(e,args)
{
	if (document.all) // caso seja IE
	{
		var evt=event.keyCode;
	}			
	else // do contrário deve ser Mozilla ou Google
	{
		var evt = e.charCode;
	}
	
	var valid_chars = 'abcdefghijlmnopqrstuvxzwykçáàâãéèêíìîóòõôúùû QWERTYUIOPASDFGHJKLÇZXCVBNM´`~^';      // criando a lista de teclas permitidas
	var chr= String.fromCharCode(evt);      // pegando a tecla digitada
	
	if (valid_chars.indexOf(chr)>-1 ) // se a tecla estiver na lista de permissão permite-a
	{
		return true;
	}
	
	// para permitir teclas como <BACKSPACE> adicionamos uma permissão para
	// códigos de tecla menores que 09 por exemplo 
	
	if (valid_chars.indexOf(chr)>-1 || evt < 9)
	{
		return true;
	}
	
	return false;   // do contrário nega
}

function VerificacaoFinalNome()
{
	var valorCampo = campoNomeCompleto.value;
	var valorFiltrado = "";
	var filtro = "abcdefghijlmnopqrstuvxzwykçáàâãéèêíìîóòõôúùû QWERTYUIOPASDFGHJKLÇZXCVBNM ";
		
	for (cont = 0; cont <= valorCampo.length - 1; cont = cont + 1)
	{
		if (filtro.indexOf(valorCampo.charAt(cont)) != -1)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
	}
	
	campoNomeCompleto.value = valorFiltrado;
}

campoNomeCompleto.onblur = function()
{
	VerificacaoFinalNome();
	verificarNomeCompleto();
}

campoNomeCompleto.onfocus = function()
{
	campoNomeCompleto.style.border = "2px solid blue";
}

//--------------- Nickname

var campoNickname = document.querySelector("#txt_nickname");

function verificarNickname()
{
	var tamanho, cont;
	var palavra, copia = "";
	
	campoNickname.value = campoNickname.value.trim();
	if (campoNickname.value != "")
	{
		campoNickname.style.border = "2px solid green";
		camposCorretos[1] = 1;
	}
	else
	{
		campoNickname.style.border = "2px solid red";
		camposCorretos[1] = 0;
	}
}

campoNickname.onkeypress = function(e,args)
{
	if (document.all) // caso seja IE
	{
		var evt=event.keyCode;
	}			
	else // do contrário deve ser Mozilla ou Google
	{
		var evt = e.charCode;
	}
	
	var valid_chars = 'abcdefghijlmnopqrstuvxzwykçáàâãéèêíìîóòõôúùûQWERTYUIOPASDFGHJKLÇZXCVBNM´`~^-_1234567890' + (("áàâãéèêíìîóòõôúùû").toUpperCase());      // criando a lista de teclas permitidas
	var chr= String.fromCharCode(evt);      // pegando a tecla digitada
	
	if (valid_chars.indexOf(chr)>-1 || evt < 9)
	{
		return true;
	}
	
	return false;   // do contrário nega
}

function VerificacaoFinalNickname()
{
	var valorCampo = campoNickname.value;
	var valorFiltrado = "";
	var filtro = 'abcdefghijlmnopqrstuvxzwykçáàâãéèêíìîóòõôúùûQWERTYUIOPASDFGHJKLÇZXCVBNM´`~^-_1234567890' + (("áàâãéèêíìîóòõôúùû").toUpperCase());
		
	for (cont = 0; cont <= valorCampo.length - 1; cont = cont + 1)
	{
		if (filtro.indexOf(valorCampo.charAt(cont)) != -1)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
	}
	
	campoNickname.value = valorFiltrado;
}

campoNickname.onblur = function()
{
	VerificacaoFinalNickname();
	verificarNickname();
}

campoNickname.onfocus = function()
{
	campoNickname.style.border = "2px solid blue";
}

//----------------- Data de Nascimento

var campoDatanas = document.querySelector ("#txt_datanas");

campoDatanas.onfocus = function datanasfoco()
{
	campoDatanas.style.border = "2px solid blue";
}

campoDatanas.onkeypress = function(e,args)
{
	if (document.all) // caso seja IE
	{
		var evt=event.keyCode;
	}			
	else // do contrário deve ser Mozilla ou Google
	{
		var evt = e.charCode;
	}
	
	var valid_chars = '1234567890/';      // criando a lista de teclas permitidas
	var chr= String.fromCharCode(evt);      // pegando a tecla digitada
	
	if (valid_chars.indexOf(chr)>-1 || evt < 9)
	{
		var valorCampo = campoDatanas.value;
		var valorFiltrado = "";
		var quant = 0;
		
		var index = valid_chars.indexOf(chr);
		var tecla = valid_chars.charAt(index);
		
		var tamanho = valorCampo.length;
		
		if (tecla == '/' && (tamanho == 2 || tamanho == 5))
		{
			return true;
		}
		
		if (tecla >= 0)
		{
			if (tamanho == 2 || tamanho == 5)
			{
				valorCampo = mascaraData(valorCampo);
				campoDatanas.value = valorCampo;
				return true;
			}
			else
			{
				return true;
			}
		}
	}
	
	return false;   // do contrário nega
}

function VerificacaoFinalDatanas()
{
	var valorCampo = campoDatanas.value;
	var valorFiltrado = "";
	var quant = 0;
	
	aux = mascaraData(valorCampo);
	valorCampo = aux;
	
	for (cont = 0; cont <= valorCampo.length - 1; cont = cont + 1)
	{
		if (valorCampo.charAt(cont) >= 0 && valorCampo.charAt(cont) <= 9 && valorCampo.charAt(cont) != " ")
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
		
		if (valorCampo.charAt(cont) == '/' && (cont == 2 || cont == 5))
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
	}
	campoDatanas.value = valorFiltrado;
}

function verificarData()
{
	aux = campoDatanas.value;
	aux =  aux.replace('/', "");
	aux =  aux.replace('/', "");
	
	//Ignora essa parte
	if (campoDatanas.value.indexOf("-") == 2 || campoDatanas.value.indexOf("-") == 4)
	{
		var separa = campoDatanas.value.split("-");
		var ano = separa[0];
			ano = parseInt(ano);
		var mes = separa[1];
			mes = parseInt(mes);
		var dia = separa[2];
			dia = parseInt(dia);
		var bi4 = ano;
			bi4 = bi4%4;
			bi4 = parseInt(bi4);
		var bi400 = ano;
			bi400 = bi400%400;
			bi400 = parseInt(bi400);
		var bi100 = ano;
			bi100 = bi100%100;
			bi100 = parseInt(bi100);
		if ((dia >= 1 && dia <= 31) && (mes >= 1 && mes <= 12))
		{
			if ((bi4 == 0 || bi400 == 0) && bi100 != 0)
			{
				if ((mes == 2 && dia <= 29) || (mes == 1 || mes == 3 || mes == 5 || mes == 7 || mes == 10 || mes == 12 && dia <= 31) || (mes == 4 || mes == 6 || mes == 8 || mes == 9 || mes == 11 && dia <= 30))
				{
					campoDatanas.style.border = "2px solid green";
					//campo[7] = 1;
				}
				else
				{
					campoDatanas.style.border = "2px solid red";
					//campo[7] = 0;
				}
			}
			else
			{
				if ((mes == 2 && dia <= 28) || (mes == 1 || mes == 3 || mes == 5 || mes == 7 || mes == 10 || mes == 12 && dia <= 31) || (mes == 4 || mes == 6 || mes == 8 || mes == 9 || mes == 11 && dia <= 30))
				{
					campoDatanas.style.border = "2px solid green";
					//campo[7] = 1;
				}
				else
				{
					campoDatanas.style.border = "2px solid red";
					//campo[7] = 0;
				}
			}
		}
		else
		{
			campoDatanas.style.border = "2px solid red";
			//campo[7] = 0;
		}
	}
	else //Começa daqui
	{
		if (aux.indexOf("-") == -1 && aux.length == 8)
		{
			var separa = aux;
				separa = separa.split("",8);
			var dia = separa[0] + separa[1];
				dia = parseInt(dia);
			var mes = separa[2] + separa[3];
				mes = parseInt(mes);
			var ano = separa[4] + separa[5] + separa[6] + separa[7];
				ano = parseInt(ano);
			var bi4 = ano;
				bi4 = bi4%4;
				bi4 = parseInt(bi4);
			var bi400 = ano;
				bi400 = bi400%400;
				bi400 = parseInt(bi400);
			var bi100 = ano;
				bi100 = bi100%100;
				bi100 = parseInt(bi100);
			
			var hoje = new Date();
			var anoAtual = hoje.getFullYear();
			var mesAtual = hoje.getMonth() + 1;
			var diaAtual = hoje.getDate();
			var idade;
			
			if ((mesAtual >= mes) && (diaAtual >= dia))
			{
				idade = anoAtual - ano;
			}
			else
			{
				idade = anoAtual - ano - 1;
			}
			
			if ((dia >= 1 && dia <= 31) && (mes >= 1 && mes <= 12))
			{
				if (((bi4 == 0 && bi100 != 0) || (bi100 == 0 && bi400 == 0)))
				{
					if (((mes == 2 && dia <= 29) || (mes == 1 || mes == 3 || mes == 5 || mes == 7 ||  mes == 8 || mes == 10 || mes == 12 && dia <= 31) || (mes == 4 || mes == 6 || mes == 9 || mes == 11 && dia <= 30)) && (idade >= 15 && idade <= 80))
					{
						campoDatanas.style.border = "2px solid green";
						camposCorretos[2] = 1;
					}
					else
					{
						campoDatanas.style.border = "2px solid red";
						camposCorretos[2] = 0;
					}
				}
				else
				{
					if (((mes == 2 && dia <= 28) || (mes == 1 || mes == 3 || mes == 5 || mes == 7 || mes == 8 ||  mes == 10 || mes == 12 && dia <= 31) || (mes == 4 || mes == 6 ||mes == 9 || mes == 11 && dia <= 30)) && (idade >= 15 && idade <= 80))
					{
						campoDatanas.style.border = "2px solid green";
						camposCorretos[2] = 1;
					}
					else
					{
						campoDatanas.style.border = "2px solid red";
						camposCorretos[2] = 0;
					}
				}
			}
			else	
			{
				campoDatanas.style.border = "2px solid red";
				camposCorretos[2] = 0;
			}
		}
		else
		{
			campoDatanas.style.border = "2px solid red";
			camposCorretos[2] = 0;
		}
	}
}
			 
campoDatanas.onblur = function()
{
	VerificacaoFinalDatanas();
	verificarData();
}

//--------------- Telefone

var campoTelefone = document.querySelector("#txt_telefone");

campoTelefone.onfocus = function()
{
	campoTelefone.style.border = "2px solid blue";
}

campoTelefone.onkeypress = function(e,args)
{
	if (document.all) // caso seja IE
	{
		var evt=event.keyCode;
	}			
	else // do contrário deve ser Mozilla ou Google
	{
		var evt = e.charCode;
	}
	
	var valid_chars = '1234567890()- ';      // criando a lista de teclas permitidas
	var chr= String.fromCharCode(evt);      // pegando a tecla digitada
	
	if (valid_chars.indexOf(chr)>-1 || evt < 9)
	{
		var valorCampo = campoTelefone.value;
		var valorFiltrado = "";
		var quant = 0;
		
		var index = valid_chars.indexOf(chr);
		var tecla = valid_chars.charAt(index);
		
		var tamanho = valorCampo.length;
		
		if (tecla == '(' && tamanho == 0)
		{
			return true;
		}
		
		if (tecla == ')' && tamanho == 3)
		{
			return true;
		}
		
		if (tecla == " " && tamanho == 4)
		{
			return true;
		}
		
		if (tecla == '-' && tamanho == 9)
		{
			return true;
		}
		
		if (tecla >= 0)
		{
			if (tamanho == 0 || tamanho == 3 || tamanho == 4 || tamanho == 9)
			{
				valorCampo = mascaraFixo(valorCampo);
				campoTelefone.value = valorCampo;
				return true;
			}
			else
			{
				return true;
			}
		}
	}
	
	return false;   // do contrário nega
}

function VerificacaoFinalTelefone()
{
	var valorCampo = campoTelefone.value;
	var valorFiltrado = "";
	var quant = 0;
	
	aux = mascaraFixo(valorCampo);
	valorCampo = aux;
	
	for (cont = 0; cont <= valorCampo.length - 1; cont = cont + 1)
	{
		if (valorCampo.charAt(cont) >= 0 && valorCampo.charAt(cont) <= 9 && valorCampo.charAt(cont) != " ")
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
		
		if (valorCampo.charAt(cont) == '(' && cont == 0)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
		
		if (valorCampo.charAt(cont) == ')' && cont == 3)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
		
		if (valorCampo.charAt(cont) == " " && cont == 4)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
		
		if (valorCampo.charAt(cont) == "-" && cont == 9)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
	}
	
	campoTelefone.value = valorFiltrado;
}

function verificarTelefone()
{
	aux = campoTelefone.value;
	aux =  aux.replace('(', "");
	aux =  aux.replace(')', "");
	aux =  aux.replace(" ", "");
	aux =  aux.replace('-', "");
	
	if (aux.length == 10)
	{
		campoTelefone.style.border = "2px solid green";
		camposCorretos[3] = 1;
	}
	else
	{
		campoTelefone.style.border = "2px solid red";
		camposCorretos[3] = 0;
	}
}

campoTelefone.onblur = function()
{
	VerificacaoFinalTelefone(); 
	verificarTelefone();
}

//------------ CPF

var campoCPF = document.querySelector("#txt_cpf");

function VerificacaoFinalCPF()
{
	var valorCampo = campoCPF.value;
	var valorFiltrado = "";
	var quant = 0;
	
	for (cont = 0; cont <= valorCampo.length - 1; cont = cont + 1)
	{
		if (valorCampo.charAt(cont) >= 0 && valorCampo.charAt(cont) <= 9 && valorCampo.charAt(cont) != " ")
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
		
		if (valorCampo.charAt(cont) == '.' && (cont == 3 || cont == 7))
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);

		}
		
		if (valorCampo.charAt(cont) == '-' && cont == 11)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
	}
	campoCPF.value = valorFiltrado;
}
	
function verificarCPF()
{
	var cpf = document.getElementById("txt_cpf").value;
	xcpf = cpf.replace("-",".");
	vetorcpf = xcpf.split(".");
	
	// Separando por conjuntos
	var conjunto1 = vetorcpf[0];
	var conjunto2 = vetorcpf[1];
	var conjunto3 = vetorcpf[2];
	var conjunto4 = vetorcpf[3];
	
	if (conjunto1 == undefined || conjunto2 == undefined || conjunto3 == undefined || conjunto4 == undefined)
	{
		campoCPF.style.border = "2px solid red";
		camposCorretos[1] = 0;
	}
	else
	{
		// separando os conjuntos em dígitos separados
		vetor_conjunto1 = conjunto1.split("");
		vetor_conjunto2 = conjunto2.split("");
		vetor_conjunto3 = conjunto3.split("");
		vetor_conjunto4 = conjunto4.split("");
		
		var dig1_conj1 = vetor_conjunto1[0];
		var dig2_conj1 = vetor_conjunto1[1];
		var dig3_conj1 = vetor_conjunto1[2];

		var dig1_conj2 = vetor_conjunto2[0];
		var dig2_conj2 = vetor_conjunto2[1];
		var dig3_conj2 = vetor_conjunto2[2];

		var dig1_conj3 = vetor_conjunto3[0];
		var dig2_conj3 = vetor_conjunto3[1];
		var dig3_conj3 = vetor_conjunto3[2];

		var dig1_conj4 = vetor_conjunto4[0];
		var dig2_conj4 = vetor_conjunto4[1];

		// Obtenção primeiro dígito verificador

		var xdig1_conj1 = dig1_conj1 * 10;
		var xdig2_conj1 = dig2_conj1 * 9;
		var xdig3_conj1 = dig3_conj1 * 8;
		
		var xdig1_conj2 = dig1_conj2 * 7;
		var xdig2_conj2 = dig2_conj2 * 6;
		var xdig3_conj2 = dig3_conj2 * 5;
		
		var xdig1_conj3 = dig1_conj3 * 4;
		var xdig2_conj3 = dig2_conj3 * 3;
		var xdig3_conj3 = dig3_conj3 * 2;
		
		var somatorio = xdig1_conj1+xdig2_conj1+xdig3_conj1+xdig1_conj2+xdig2_conj2+xdig3_conj2+xdig1_conj3+xdig2_conj3+xdig3_conj3;
		var resto = somatorio%11;


		if (resto < 2)
		{
			var digito = "0";
		} 
		else
		{
			var digito = 11 - resto;
		}

		//------ Segundo Digito
		
		var xxdig1_conj1 = dig1_conj1 * 11;
		var xxdig2_conj1 = dig2_conj1 * 10;
		var xxdig3_conj1 = dig3_conj1 * 9;
		
		var xxdig1_conj2 = dig1_conj2 * 8;
		var xxdig2_conj2 = dig2_conj2 * 7;
		var xxdig3_conj2 = dig3_conj2 * 6;
		
		var xxdig1_conj3 = dig1_conj3 * 5;
		var xxdig2_conj3 = dig2_conj3 * 4;
		var xxdig3_conj3 = dig3_conj3 * 3;
		
		var xxdig1_conj4 = dig1_conj4 * 2;
		
		var somatorio =xxdig1_conj1+xxdig2_conj1+xxdig3_conj1+xxdig1_conj2+xxdig2_conj2+xxdig3_conj2+xxdig1_conj3+xxdig2_conj3+xxdig3_conj3+xxdig1_conj4;
		var xresto = somatorio%11;
					
		if (xresto < 2)
		{
			var xdigito = "0"
		}
		else 
		{
			var xdigito = 11 - xresto;
		}
		
		var aux = campoCPF.value;
		
		aux = aux.replace('.', "");
		aux = aux.replace('.', "");
		aux = aux.replace('.', "");
		aux = aux.replace('-', "");
		
		var somaIgual = 0;
		var somaDiferente = 0;
		
		for (cont = 0; cont <= aux.length - 1; cont = cont + 1)
		{
			somaIgual = somaIgual + parseInt(aux.charAt(cont));
			somaDiferente = somaDiferente + parseInt(aux.charAt(cont));
		}
		
		somaIgual = somaIgual/aux.length;
		
		if (somaIgual == aux.charAt(0) || somaDiferente == 54)
		{
			campoCPF.style.border = "2px solid red";
			camposCorretos[4] = 0;
		}
		else
		{
			if ((digito != dig1_conj4 || xdigito != dig2_conj4))
			{
				campoCPF.style.border = "2px solid red";
				camposCorretos[4] = 0;
			}
			else
			{
				campoCPF.style.border = "2px solid green";
				camposCorretos[4] = 1;
			}
		}
	}	
}
	
campoCPF.onblur = function()
{
	VerificacaoFinalCPF();
	verificarCPF();
}

campoCPF.onfocus = function()
{
	campoCPF.style.border = "2px solid blue";
}

campoCPF.onkeypress = function(e,args)
{
	if (document.all) // caso seja IE
	{
		var evt=event.keyCode;
	}			
	else // do contrário deve ser Mozilla ou Google
	{
		var evt = e.charCode;
	}
	
	var valid_chars = '1234567890.-';      // criando a lista de teclas permitidas
	var chr= String.fromCharCode(evt);      // pegando a tecla digitada
	
	if (valid_chars.indexOf(chr)>-1 || evt < 9)
	{
		var valorCampo = campoCPF.value;
		var valorFiltrado = "";
		var quant = 0;
		
		var index = valid_chars.indexOf(chr);
		var tecla = valid_chars.charAt(index);
		
		var tamanho = valorCampo.length;
		
		if (tecla == '.' && (tamanho == 3 || tamanho == 7))
		{
			return true;
		}
		
		if (tecla == '-' && tamanho == 11)
		{
			return true;
		}
		
		for (cont = 0; cont <= tamanho - 1; cont = cont + 1)
		{
			
		}
		
		if (tecla >= 0)
		{
			if (tamanho == 3 || tamanho == 7 || tamanho == 11)
			{
				valorCampo = mascaraCPF(valorCampo);
				campoCPF.value = valorCampo;
				return true;
			}
			else
			{
				return true;
			}
		}
	}
	
	return false;   // do contrário nega
}

//--------------- Sexo

var bordaSexo = document.querySelector("#sexo");
var campoSexoMasculino = document.querySelector("#rdb_sexo_masculino");
var campoSexoFeminino = document.querySelector("#rdb_sexo_feminino");

function verificarSexo()
{
	if (campoSexoMasculino.checked == false && campoSexoFeminino.checked == false)
	{
		bordaSexo.style.border = "";
		camposCorretos[5] = 0;
	}
	else
	{
		bordaSexo.style.border = "";
		camposCorretos[5] = 1;
	}
}

campoSexoMasculino.onblur = function()
{
	verificarSexo();
}

campoSexoFeminino.onblur = function()
{
	verificarSexo();
}

campoSexoMasculino.onfocus = function()
{
	bordaSexo.style.border = "";
}

campoSexoFeminino.onfocus = function()
{
	bordaSexo.style.border = "";
}

//------------ Email

var campoEmail = document.querySelector("#txt_email");

// KeyPress
campoEmail.onkeypress = function filtroEmail(e,args)
{              
        if (document.all) // caso seja IE
		{
			var evt=event.keyCode;
		}			
        else // do contrário deve ser Mozilla ou Google
		{
			var evt = e.charCode;
		}
		
        var valid_chars = '0123456789abcdefghijlmnopqrstuvxzwykQWERTYUIOPLKJHGFDSAZXCVBNM-_@.';      // criando a lista de teclas permitidas
        var chr= String.fromCharCode(evt);      // pegando a tecla digitada
        
		if (valid_chars.indexOf(chr)>-1 || evt < 9)
		{
			return true;
		}
		
        return false;   // do contrário nega
}

function VerificacaoFinalEmail()
{
	var valorCampo = campoEmail.value;
	var valorFiltrado = "";
	var quant = 0;
	var filtro = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM@.-_";
		
	for (cont = 0; cont <= valorCampo.length - 1; cont = cont + 1)
	{
		if (filtro.indexOf(valorCampo.charAt(cont)) != -1)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont).toLowerCase();
		}
	}
	
	campoEmail.value = valorFiltrado;
}

function verificarEmail()
{
	while ((campoEmail.value.lastIndexOf(".") == campoEmail.value.length - 1) && (campoEmail.value.lastIndexOf(".") != -1 && campoEmail.value.length != 0))
	{
		aux = campoEmail.value.split("");
		aux[campoEmail.value.length - 1] = "";
		outraaux = "";
		
		for (cont = 0; cont <= campoEmail.value.length - 1; cont = cont +1)
		{
			outraaux = outraaux + aux[cont];
		}
		
		campoEmail.value = outraaux;
	}
	
	if (campoEmail.value.indexOf("@") != -1)
	{
		var aux = campoEmail.value.split("@");
		var usuario = aux[0];
		var dominio = aux[1];
		
		if ((usuario.length >= 1) && 
			(dominio.length >= 3) && 
			(dominio.indexOf(".") != -1) &&
			(dominio.indexOf(".") >= 1) &&
			(dominio.lastIndexOf(".") < dominio.length - 1))
		{
			campoEmail.style.border = "2px solid green";
			camposCorretos[6] = 1;
		}
		else
		{
			campoEmail.style.border = "2px solid red";
			camposCorretos[6] = 0;
		}
	}
	else
	{
		campoEmail.style.border = "2px solid red";
		camposCorretos[6] = 0;
	}
}

campoEmail.onblur = function()
{
	VerificacaoFinalEmail();
	verificarEmail();
}

campoEmail.onfocus = function()
{
	campoEmail.style.border = "2px solid blue";
}

//------------- Senha

var campoSenha = document.querySelector("#txt_senha");

campoSenha.onfocus = function()
{
	campoSenha.style.border = "2px solid blue";
}

campoSenha.onkeypress = function(e,args)
{
	if (document.all) // caso seja IE
		{
			var evt=event.keyCode;
		}			
        else // do contrário deve ser Mozilla ou Google
		{
			var evt = e.charCode;
		}
		
        var valid_chars = "0123456789abcdefghijlmnopqrstuvxzwykçÇsQWERTYUIOPASDFGHJKLZXCVBNM´`~!@#$%^&*()_\"'-+={}[]\\|:;<>,.?/";      // criando a lista de teclas permitidas
        var chr= String.fromCharCode(evt);      // pegando a tecla digitada
        
		if (valid_chars.indexOf(chr)>-1 ) // se a tecla estiver na lista de permissão permite-a
		{
			return true;
		}
		
        // para permitir teclas como <BACKSPACE> adicionamos uma permissão para
        // códigos de tecla menores que 09 por exemplo 
		
        if (valid_chars.indexOf(chr)>-1 || evt < 9)
		{
			return true;
		}
		
        return false;   // do contrário nega
}

campoSenha.onkeyup = function()
{
	var valorCampo = campoSenha.value;
	var valorFiltrado = "";
	var quant = 0;
	var filtro = "0123456789abcdefghijlmnopqrstuvxzwykçÇsQWERTYUIOPASDFGHJKLZXCVBNM´`~!@#$%^&*()_\"'-+={}[]\\|:;<>,.?/";
		
	for (cont = 0; cont <= valorCampo.length - 1; cont = cont + 1)
	{
		if (filtro.indexOf(valorCampo.charAt(cont)) != -1)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
	}
	
	campoSenha.value = valorFiltrado;
}

function verificarSenha()
{
	if (campoSenha.value.length >=6 && campoSenha.value.length <= 12)
	{
		campoSenha.style.border = "2px solid green";
		camposCorretos[7] = 1;
	}
	else
	{
		campoSenha.style.border = "2px solid red";
		camposCorretos[7] = 0;
	}
}

campoSenha.onblur = function()
{
	verificarSenha();
}

//--------------- Confirmar Senha

var campoConfirmaSenha = document.querySelector("#txt_confirmarSenha");

campoConfirmaSenha.onfocus = function()
{
	campoConfirmaSenha.style.border = "2px solid blue";
}

campoConfirmaSenha.onkeypress = function(e,args)
{
	if (document.all) // caso seja IE
		{
			var evt=event.keyCode;
		}			
        else // do contrário deve ser Mozilla ou Google
		{
			var evt = e.charCode;
		}
		
        var valid_chars = "0123456789abcdefghijlmnopqrstuvxzwykçÇsQWERTYUIOPASDFGHJKLZXCVBNM´`~!@#$%^&*()_\"'-+={}[]\\|:;<>,.?/";      // criando a lista de teclas permitidas
        var chr= String.fromCharCode(evt);      // pegando a tecla digitada
        
		if (valid_chars.indexOf(chr)>-1 ) // se a tecla estiver na lista de permissão permite-a
		{
			return true;
		}
		
        // para permitir teclas como <BACKSPACE> adicionamos uma permissão para
        // códigos de tecla menores que 09 por exemplo 
		
        if (valid_chars.indexOf(chr)>-1 || evt < 9)
		{
			return true;
		}
		
        return false;   // do contrário nega
}

campoConfirmaSenha.onkeyup = function()
{
	var valorCampo = campoConfirmaSenha.value;
	var valorFiltrado = "";
	var quant = 0;
	var filtro = "0123456789abcdefghijlmnopqrstuvxzwykçÇsQWERTYUIOPASDFGHJKLZXCVBNM´`~!@#$%^&*()_\"'-+={}[]\\|:;<>,.?/";
		
	for (cont = 0; cont <= valorCampo.length - 1; cont = cont + 1)
	{
		if (filtro.indexOf(valorCampo.charAt(cont)) != -1)
		{
			valorFiltrado = valorFiltrado + valorCampo.charAt(cont);
		}
	}
	
	campoConfirmaSenha.value = valorFiltrado;
}

function verificarConfirmaSenha()
{
	if (campoConfirmaSenha.value == campoSenha.value && campoSenha.value != "")
	{
		campoConfirmaSenha.style.border = "2px solid green";
		camposCorretos[8] = 1;
	}
	else
	{
		campoConfirmaSenha.style.border = "2px solid red";
		camposCorretos[8] = 0;
	}
}

campoConfirmaSenha.onblur = function()
{
	verificarConfirmaSenha();
}

//------------------ Limpar

function LimparBorda()
{
	campoNomeCompleto.style.border = "";
	campoNickname.style.border = "";
	campoCPF.style.border = "";
	campoTelefone.style.border = "";
	campoDatanas.style.border = "";
	bordaSexo.style.border = "";
	campoEmail.style.border = "";
	campoSenha.style.border = "";
	campoConfirmaSenha.style.border = "";
	
	for(cont = 0; cont <= camposCorretos.length - 1; cont = cont + 1)
	{
		camposCorretos[cont] = 0;
	}
}

//------------------- Enviar Dados

function Validar()
{
	verificarNomeCompleto();
	verificarNickname();
	verificarCPF();
	verificarTelefone();
	verificarData();
	verificarSexo();
	verificarEmail();
	verificarSenha();
	verificarConfirmaSenha();
	
	var aux = 0;
	for (cont = 0; cont <= camposCorretos.length - 1; cont = cont + 1)
	{
		aux = aux + parseInt(camposCorretos[cont]);
	}
	
	if (aux != camposCorretos.length)
	{
		alert("Alguns campos estão inválidos, verifique e tente novamente!\n\n");
		return false;
	}
	else
	{
		var frm = document.querySelector("#Frm_Dados");
		frm.submit();
	}
}


