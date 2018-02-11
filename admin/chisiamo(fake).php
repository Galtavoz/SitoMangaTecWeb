<?php
include("sopra.php");
?>
			<div class="span9">
          		<div class="row-fluid">
					<h2 style="font-variant:small-caps;">Gestione Progetti</h2><br/>
					<div class="well well-small">
						<a href="inserisci-progetto.php"><button class="btn btn-info"><i class="icon-plus icon-white"></i> Nuovo progetto</button></a>
					</div>
					<table class="table table-bordered table-hover table-striped">
						<?php
							$query= mysqli_query($connessione,"SELECT * FROM progetti ORDER BY titolo");
							$ris=mysqli_query($query) or die(mysqli_error());
							if(mysqli_num_rows($ris)){
								echo'
									<tr><th>Titolo</th><th>Contenuto</th><th>Modifica</th><th>Elimina</th></tr>';
								while($dato=mysqli_fetch_array($ris)){
									echo"<tr>
											<td style=\"color: #0088CC;\">$dato[titolo]</td>
											
											<td>".substr(strip_tags(html_entity_decode($dato['testo'])),0,80)."...</td>
											";
												
									echo"	
											<td>
												<a href=\"modifica-progetto.php?id=$dato[id]\">
													<button class=\"btn btn-success\">
														<i class=\"icon-edit icon-white\"></i> Modifica
													</button>
												</a>
											</td>
											<td>
												<a href=\"cancellazione.php?id=$dato[id]&tipo=progetto\" onclick=\"return confirm('Sei sicuro di voler cancellare questo progetto?')\">
													<button class=\"btn btn-danger\">
														<i class=\"icon-trash icon-white\"></i> Elimina
													</button>
												</a>
											</td>
										</tr>";
								}		
							}
							else{
								echo"<h2>Nessun progetto presente</h2><br/>";
							}
						?>
					</table>
				</div>
			</div>
<?php
include("sotto.php");
?>
