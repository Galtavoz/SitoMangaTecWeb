<?php
include("sopra.php");
?>
			<div class="span9">
          		<div class="row-fluid">
					<h2 style="font-variant:small-caps;">Gestione Capitoli</h2><br/>
					<div class="well well-small">
						<a href="inserisci-capitolo.php"><button class="btn btn-info"><i class="icon-plus icon-white"></i> Nuovo Capitolo</button></a>
					</div>
					<table class="table table-bordered table-hover table-striped">
						<?php
							$query= mysql_query("SELECT * FROM capitoli") or die(mysql_error());
							if(mysql_num_rows($query)){
								echo'
									<tr><th>Nome</th><th>Nome Capitolo</th><th>Numero</th><th>Data Aggiunta</th><th>Modifica</th><th>Elimina</th></tr>';
								while($dato=mysql_fetch_array($query)){
									echo"<tr>
											<td style=\"color: #0088CC;\">$dato[nome]</td>
											<td>$dato[nomecap]</td>
											<td>$dato[numero]</td>
											<td>$dato[dataagg]</td>
											";
									
												
									echo"	
											<td>
												<a href=\"modifica-capitolo.php?id=$dato[nome]\">
													<button class=\"btn btn-success\">
														<i class=\"icon-edit icon-white\"></i> Modifica
													</button>
												</a>
											</td>
											<td>
												<a href=\"cancellazione.php?id=$dato[id]&tipo=capitolo\" onclick=\"return confirm('Sei sicuro di voler cancellare questo capitolo?')\">
													<button class=\"btn btn-danger\">
														<i class=\"icon-trash icon-white\"></i> Elimina
													</button>
												</a>
											</td>
										</tr>";
								}		
							}
							else{
								echo"<h2>Nessun capitolo presente</h2><br/>";
							}
						?>
					</table>
				</div>
			</div>
<?php
include("sotto.php");
?>
