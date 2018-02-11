<?php

$connessione = mysql_connect("localhost","root","" );
if (!$connessione) die("<h1>Connessione a Mysql non riuscita</h1> ".mysql_error());
else {
$db = mysql_select_db("apremidi",$connessione);
if (!$db) die("<h1>Connessione al Database non riuscita</h1> ".mysql_error());
}	
	



$db=mysql_select_db('apremidi') or die('Errore BD');
session_start();
if (empty($_POST['old_password'])) {
	exit("Attenzione inserire vecchia password");
}
if (empty($_POST['new_password'])) {
	exit("Nuova password mancante");
}
if (empty($_POST['check_password'])) {
	exit("Attenzione inserire nuovamente la password");
}
$password = md5($_POST['old_password']);
$user = mysql_real_escape_string($_SESSION['username']);

$old_password_db = "SELECT username,password FROM admin WHERE username = '$user' AND password = '$password'";
$old_password_db_query = mysql_query($old_password_db) or die(mysql_error());
if (!mysql_num_rows($old_password_db_query)) {
	exit("Attenzione la vecchia password inserita non e' corretta");
}
if ($_POST['new_password'] != $_POST['check_password']) {
	exit("Le password non correispondono, prego reinserirle");
}
$new_password = md5($_POST['new_password']);
$query_update = mysql_query("UPDATE admin SET password = '$new_password' WHERE username = '".$user."'")or die();
if(!$query_update)
	echo mysql_error();
if (!mysql_affected_rows()) {
	exit("Errore nell'aggionamento di".$_SESSION['username']."");
} else {
	session_destroy();
	echo "La tua password aggiornata, rieffettua il <a href=\"index.php\">login</a> !";
}
?>
