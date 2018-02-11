<div id="list">
	<div id="titolone">
		LISTA DEI CAPITOLI DI <?php
				require("config.php");
				$query = "SELECT * FROM capitoli INNER JOIN manga ON capitoli.nome=manga.nome WHERE manga.codice=$_GET[cod]";
				$dato = mysql_query($query);
				$ris=mysql_fetch_array($dato);
				echo $ris['nome'];
				?>
	</div>
	<div id="group">
		<div id="tittit">Capitoli</div>
		<?php 
			require("config.php");
				$query = "SELECT * FROM capitoli INNER JOIN manga ON capitoli.nome=manga.nome WHERE manga.codice=$_GET[cod]";
				$dato = mysql_query($query);
			while($ris=mysql_fetch_array($dato)){
				echo"<div id=\"capitol\"><a href=\"$ris[link]\"><div id=\"s\">Capitolo $ris[numero]:$ris[nomecap]</div><div id=\"d\">$ris[dataagg]</div></div>";
			}
		?>
	</div>
</div>