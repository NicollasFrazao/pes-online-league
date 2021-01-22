<?php
	$host = "localhost";
	$user = "***REMOVED***";
	$pass = "***REMOVED***";
	$banco = "db_liga_online";
	
	$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
	mysql_select_db($banco) or die(mysql_error());
	
	$timeZone = mysql_query("set time_zone = '-03:00'");

	mysql_set_charset('utf8');
	ini_set('default_charset','UTF-8');

	setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );

	date_default_timezone_set( 'America/Sao_Paulo' );
?>
