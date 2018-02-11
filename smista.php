<?php
	session_start();
	$n=$_SESSION['user'];
	include('config.php');
	switch ($_GET['tipo']) {
			case 'mipiace':
				$query=mysql_query("SELECT * FROM manga WHERE codice=$_GET[cod]");
				$dato=mysql_fetch_array($query);
				$query2=mysql_query("UPDATE manga SET mipiace=$dato[mipiace]+1 WHERE codice=$_GET[cod]") or die(mysql_error());
				$query3=mysql_query("INSERT INTO mipiace(manga,utente) VALUES('$dato[nome]','$n')")or die(mysql_error());
				header("location:articolo.php?cod=$_GET[cod]");
			break;
			case 'preferiti':
				$query=mysql_query("SELECT * FROM manga WHERE codice=$_GET[cod]");
				$dato=mysql_fetch_array($query);
				$query2=mysql_query("INSERT INTO preferiti (nome,utente) VALUES ('$dato[nome]', '$n')");
				header("location:articolo.php?cod=$_GET[cod]");
			break;
			
	}
	