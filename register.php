<?php
	require("config.php");
	$err = array();
	$err['count'] = 0;
	$query ="SELECT * FROM utenti";
	if(isset($_POST['username']) && strlen($_POST['username']) <= 32){
		$username = $_POST['username'];
		} else {
			$err['count']++;
			$err['username'] = array('errore' => 'Username vuoto o troppo lungo');
		}
	if(isset($_POST['password']) && strlen($_POST['password']) <= 32){
		$password = $_POST['password'];
		} else {
			$err['count']++;
			$err['password'] = array('errore' => 'Password vuoto o troppo lungo');
		}
	$dato = mysql_query($query);
	while($val = mysql_fetch_array($dato)){
		if($username==$val['user']) header("location:error.php");
	}
		if ($err['count'] === 0) {
			mysql_query("INSERT INTO utenti(user,pass) VALUES ('$username','$password')") or die(mysql_error());
				if(mysql_affected_rows()){
					session_start();
					$_SESSION['user'] = $username;
					header("location:personal.php");

				}

				else{

					echo"<div class=\"......\">Errore inserimento utente!</div>";

				}

			}
?>