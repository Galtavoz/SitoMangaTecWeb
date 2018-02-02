<?php
		include('headerp.html');
		include('vetrinap.html');
		require("config.php");
		session_start();
		$n=$_SESSION['user'];
		$query = "SELECT * FROM (( manga INNER JOIN preferiti ON manga.nome=preferiti.nome)INNER JOIN utenti ON utenti.user=preferiti.utente) WHERE utenti.user=\"$n\"";
		$dato = mysql_query($query);
		if(mysql_affected_rows())include('preferitih.php');
		include('ultimih.php');
		include('popolarih.php');
		include('footer.html');
	?>