<?php
include("sopra.php");
?>
			<div class="span9">
          		<div class="row-fluid">
					<h2 style="font-variant:small-caps;">Gestione Contatti</h2><br/>
					<table class="table table-bordered table-hover table-striped">
						<?php
							$query =mysql_query("SELECT * FROM contatti ORDER BY data desc") or die(mysql_error());
							if(mysql_num_rows($query)){
								echo'
									<tr><th>Nome</th><th>Cognome</th><th>Telefono</th><th>Email</th><th>Data</th><th>Messaggio</th><th>Vedi</th><th>Elimina</th></tr>';
								while($dato=mysql_fetch_array($query)){
									echo"<tr>
											<td style=\"color: #0088CC;\">$dato[nome]</td>
											<td style=\"color: #0088CC;\">$dato[cognome]</td>
											<td style=\"color: #0088CC;\">$dato[telefono]</td>
											<td style=\"color: #0088CC;\"><a href=\"mailto:$dato[email]\">$dato[email]</a></td>
											<td> $dato[data]</td>
											<td>".substr(strip_tags(html_entity_decode($dato['messaggio'])),0,80)."...</td>
											";	
									echo"	
											<td>
												<a href=\"vedi-messaggio.php?id=$dato[id]\">
													<button class=\"btn btn-success\">
														<i class=\"icon-edit icon-white\"></i> Vedi Messaggio
													</button>
												</a>
											</td>
											<td>
												<a href=\"cancellazione.php?id=$dato[id]&tipo=contatto\" onclick=\"return confirm('Sei sicuro di voler cancellare questo articolo?')\">
													<button class=\"btn btn-danger\">
														<i class=\"icon-trash icon-white\"></i> Elimina
													</button>
												</a>
											</td>
										";
								}
							}
							else{
								echo"<h2>Nessun contatto presente</h2><br/>";
							}
						?>
					</table>
				</div>
			</div>
<?php
include("sotto.php");
?>
