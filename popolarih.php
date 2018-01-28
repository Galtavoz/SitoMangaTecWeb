<div id="boxOrdineArt">
	<div id="boxTitolo">
		Piu popolari
		<div id="boxMore"><a href="Popular.php"> more&nbsp></a> </div>
	</div>

		<?php
			require("config.php");
			$query = "SELECT * FROM manga ORDER BY mipiace desc";
			$dato = mysql_query($query);
			$conta=0;
			while($val = mysql_fetch_array($dato) and $conta<5){
				
				echo"<div id=\"boxArticolo\">
					<img src=\"$val[immagine]\">
					<div id=\"titolo\">
						<a href=\"articolo.php\">$val[nome]</a>
					</div>						
					<div id=\"autore\">$val[autore]</div>
				</div>";
			$conta++;
			}
		?>
</div>