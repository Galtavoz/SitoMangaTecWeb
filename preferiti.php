<?php
		include('headerp.html');
		session_start();
		require("config.php");
		$n=$_SESSION['user'];
		$query = "SELECT * FROM preferiti INNER JOIN manga On preferiti.nome=manga.nome where preferiti.utente=\"$n\"";
		$dato = mysql_query($query);
		if(mysql_affected_rows())include('pref.php');
		else echo"<div id=\"contenuto\">
				 <div id=\"boxOrdineArtPagine\">
					<p class=\"centerb\">Nessun Manga aggiunto ai preferiti</p>
				  </div></div>";
		include('footer.html');
?>