<?php
	$connessione = mysql_connect ("localhost","root","") or die ('<h1>Problemi di Autenticazione</h1>');
	$db = mysql_select_db ("manga", $connessione) or die ('<h1>Problemi col Database</h1>');
?>