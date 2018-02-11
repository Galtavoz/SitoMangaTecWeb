<div id="boxOrdineArt">
	<div id="boxTitolo">
		Piu popolari
		<div id="boxMore"><a  class="stil" href="Popular.php"> more&nbsp></a> </div>
	</div>

		<?php
			require("config.php");
			$query = "SELECT * FROM manga ORDER BY mipiace desc";
			$dato = mysql_query($query);
			$conta=0;
			while($val = mysql_fetch_array($dato) and $conta<5){
				
				echo"<div id=\"boxArticolo\">
					<a href=\"articolo.php?cod=$val[codice]\"><img src=\"$val[immagine]\"></a>
					<div id=\"titolo\">
						<a class=\"stil\" href=\"articolo.php?cod=$val[codice]\">$val[nome]</a>
					</div>						
					<div id=\"autore\">$val[autore]</div>
				</div>";
			$conta++;
			}
		?>
</div>