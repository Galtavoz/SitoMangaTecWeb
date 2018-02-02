<div id="boxOrdineArt">
	<div id="boxTitolo">
		Preferiti
		<div id="boxMore"><a href="Popular.php"> more&nbsp></a> </div>
	</div>

		<?php
			session_start();
			require("config.php");
			$n=$_SESSION['user'];
			$query = "SELECT * FROM (( manga INNER JOIN preferiti ON manga.nome=preferiti.nome)INNER JOIN utenti ON utenti.user=preferiti.utente) WHERE utenti.user=\"$n\"";
			$dato = mysql_query($query);
			$conta=0;
			while($val = mysql_fetch_array($dato) and $conta<5){
				
				echo"<div id=\"boxArticolo\">
					<a href=\"articolo.php?cod=$val[codice]\"><img src=\"$val[immagine]\"></a>
					<div id=\"titolo\">
						<a href=\"articolo.php?cod=$val[codice]\">$val[nome]</a>
					</div>						
					<div id=\"autore\">$val[autore]</div>
				</div>";
			$conta++;
			}
		?>
</div>