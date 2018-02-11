<div id="boxOrdineArt">
		<div id="boxTitolo">
			Ultimi Caricamenti
			<div id="boxMore"><a href="Latest.php"> more&nbsp></a> </div>
			</div>
		<?php
			require("config.php");
			$query = "SELECT * FROM manga ORDER BY ultimo desc";
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