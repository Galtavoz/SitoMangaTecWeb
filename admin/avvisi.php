<?php
include("sopra.php");
?>
			<div class="span9">
          		<div class="row-fluid">
					<h2 style="font-variant:small-caps;">Gestione Manga</h2><br/>
					<div class="well well-small">
						<a href="inserisci-avviso.php"><button class="btn btn-info"><i class="icon-plus icon-white"></i> Nuovo Manga</button></a>
					</div>
					<table class="table table-bordered table-hover table-striped">
						<?php
							$query= mysql_query("SELECT * FROM manga") or die(mysql_error());
							if(mysql_num_rows($query)){
								echo'
									<tr><th>Titolo</th><th>Autore</th><th>Capitoli</th><th>Commenti</th><th>Mi Piace</th><th>Immagine</th><th>Modifica</th><th>Elimina</th></tr>';
								while($dato=mysql_fetch_array($query)){
									echo"<tr>
											<td style=\"color: #0088CC;\">$dato[nome]</td>
											<td>$dato[autore]</td>
											<td>$dato[capitoli]</td>
											<td>$dato[commenti]</td>
											<td>$dato[mipiace]</td>
											<td>$dato[immagine]</td>
											";
									
												
									echo"	
											<td>
												<a href=\"modifica-avviso.php?id=$dato[nome]\">
													<button class=\"btn btn-success\">
														<i class=\"icon-edit icon-white\"></i> Modifica
													</button>
												</a>
											</td>
											<td>
												<a href=\"cancellazione.php?id=$dato[nome]&tipo=manga\" onclick=\"return confirm('Sei sicuro di voler cancellare questo articolo?')\">
													<button class=\"btn btn-danger\">
														<i class=\"icon-trash icon-white\"></i> Elimina
													</button>
												</a>
											</td>
										</tr>";
								}		
							}
							else{
								echo"<h2>Nessun articolo presente</h2><br/>";
							}
						?>
					</table>
				</div>
			</div>
<?php
include("sotto.php");
?>
