<?php
				require("config.php");
				$query = "SELECT * FROM manga WHERE codice=$_GET[cod]";
				
				$dato = mysql_query($query);
				$val=mysql_fetch_array($dato);
				echo"<div id=\"boxInfo\">
				<img class=\"imgzoom\" src=\"$val[immagine]\" alt=\"immagine copertina $val[nome]\" title=\"immagine copertina $val[nome]\" \>
				
					<h2 class=\"ff\">$val[nome]</h2><br><br>
				<table id=\"boxTable\">
				<tr>
					<td><h3>Author: &nbsp </h3> $val[autore]</td>
					<td><h3>Status:</h3>"; if($val['finito']="0") echo"&nbspOngoing"; else echo"&nbspEnded";echo"</td>
				</tr>
				<tr>
					<td><h3>Update:</h3> $val[ultimo]</td>
					<td><h3>Like:</h3> &nbsp $val[mipiace]</td>
				</tr>
				
				<tr>
					<td colspan=\"3\"><h3>Descrizione: </h3><div id=\"boxDescriz\">$val[descrizione]</div></td>
				</tr>
			</table>
			<div id=\"boxBtn\">
			
				
				<a href=\"capitoli.php?cod=$_GET[cod]\"><button id=\"pulsante\">Leggi</button></a>";
				$us=isset($_SESSION['user']);
				$a=$val['nome'];
				$query2="SELECT COUNT(*) as A FROM mipiace WHERE manga='$a' and utente='$us'";
				$query3="SELECT COUNT(*) FROM preferiti WHERE nome='$a' and utente='$us'";
				$dato=mysql_query($query2);
				$dato2=mysql_query($query3);
				$ris=mysql_fetch_array($dato);
				echo $ris['A'];
				if($_SESSION)echo"<a href=\"smista.php?cod=$_GET[cod]&tipo=mipiace\"><button onclick=\"mipiace()\" id=\"pulsante\">Mi Piace</button></a>";
				if($_SESSION)echo"<a href=\"smista.php?cod=$_GET[cod]&tipo=preferiti\"><button onclick=\"preferiti()\" id=\"pulsante\">Aggiungi a MyManga</button></a>";
			echo"</div>
		
			</div>";
	
	echo"</div>";
	?>
