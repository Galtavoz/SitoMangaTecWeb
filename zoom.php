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
			
				";
				$us=isset($_SESSION['user']);
				$query2=mysql_query("SELECT * FROM mipiace WHERE manga=$val[nome] and utente=us");
				if($_SESSION)if($query2) echo"malick gay";
				else echo"<a href=\"smista.php?cod=$_GET[cod]&tipo=mipiace\"><button onclick=\"mipiace()\" id=\"pulsante\">Mi Piace</button></a>";
				if($_SESSION)echo"<a href=\"smista.php?cod=$_GET[cod]&tipo=preferiti\"><button onclick=\"preferiti()\" id=\"pulsante\">Aggiungi a MyManga</button></a>";
			echo"</div>
		
			</div>";
	echo"
	<div id=\"boxCapitoli\">
		<div id=\"capitoli\">
			<p id=\"headerCap\"> Capitoli</p>
			<div id=\"allcap\">";
				$conta=$val['capitoli'];
				$z= $_GET['cod'];
				$flag=true;
				while($conta>0 && $flag){
						if (isset($_GET['inizio']))
							if($conta==$_GET['inizio']) echo"<div onclick=\"highlight($conta,$z)\" id=$conta  class=\"bottonecapacceso\">";
							else echo"<div onclick=\"highlight($conta, $z)\" id=$conta class=\"bottonecapspento\">";
						else if ($conta==$val['capitoli']) echo"<div onclick=\"highlight($conta,$z)\" id=$conta  class=\"bottonecapacceso\">";
						else echo"<div onclick=\"highlight($conta, $z)\" id=$conta class=\"bottonecapspento\">";
						echo"$conta"; echo" - "; $x=$conta-99 ;if($conta>99)echo"$x";else echo"1"; 
						echo"</div>";
						if($conta==0) flag==false;
						else $conta-=100;
						$k=$conta;
						
				}
			echo"</div>
		</div>";
	 if(isset($_GET['inizio'])){
		$h=$_GET['inizio'];
				if($h>99)$query=mysql_query("SELECT * FROM capitoli INNER JOIN manga ON capitoli.nome = manga.nome WHERE capitoli.numero<=id AND capitoli.numero>id-99 ORDER BY capitoli.numero DESC");
				else $query=mysql_query("SELECT * FROM capitoli INNER JOIN manga ON capitoli.nome = manga.nome WHERE capitoli.numero<=id AND manga.codice=$_GET[cod] ORDER BY capitoli.numero DESC");
				while(mysql_fetch_array($query)){
					echo"<div id=\"boxcapitoli\">
						<div id=\"boxCap\">
							
						</div>
					</div>";
				}
	}
	echo"</div>";
	?>
