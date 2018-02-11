<div id="titoloPagina">
	Ultime Uscite
</div>
	<div id="contenuto">
		<div id="boxOrdineArtPagine">
			<?php
				require("config.php");
				$query = "SELECT * FROM manga ORDER BY ultimo desc";
				$dato = mysql_query($query);
				while($val = mysql_fetch_array($dato)){
					echo"<div id=\"boxArticoloPagine\">
					<img src=\"$val[immagine]\">
					<div id=\"titolo\">
						<a class=\"stil\" href=\"articolo.php?cod=$val[codice]\">$val[nome]</a>
					</div>						
					<div id=\"autore\">$val[autore]</div>
				</div>";
				}
			?>
		</div>
	</div>