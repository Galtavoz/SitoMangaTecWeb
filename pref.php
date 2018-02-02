<div id="titoloPagina">
	Preferiti
</div>
	<div id="contenuto">
		<div id="boxOrdineArtPagine">
			<?php
				session_start();
				require("config.php");
				$n=$_SESSION['user'];
				$query = "SELECT * FROM preferiti INNER JOIN manga On preferiti.nome=manga.nome where preferiti.utente=\"$n\"";
				$dato = mysql_query($query);
				while($val = mysql_fetch_array($dato)){
					echo"<div id=\"boxArticoloPagine\">
					<img src=\"$val[immagine]\">
					<div id=\"titolo\">
						<a href=\"articolo.php?cod=$val[codice]\">$val[nome]</a>
					</div>						
					<div id=\"autore\">$val[autore]</div>
				</div>";
				}
			?>
		</div>
	</div>