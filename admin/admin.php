<?php
include("sopra.php");
?>
			<div class="span9">
          		<div class="row-fluid">
					<h2 style="font-variant:small-caps;">Gestione Admin</h2><br/>
					<div class="well well-small">
						<a href="inserisci-admin.php"><button class="btn btn-info"><i class="icon-plus icon-white"></i> Nuovo Admin</button></a>
					</div>
					<table class="table table-bordered table-hover table-striped">
						<?php
							$query= mysql_query("SELECT user,pass FROM admin ORDER BY user")or die(mysql_error());
							if(mysql_num_rows($query)){
								echo'
									<tr><th>Username</th><th>Password</th><th>Modifica</th><th>Elimina</th>';
								while($dato=mysql_fetch_array($query)){
									echo"<tr>
											<td style=\"color: #0088CC;\">$dato[user]</td>
											<td>$dato[pass]</td>	
										
											<td>
												<a href=\"form_reset_psw.php\">
													<button class=\"btn btn-success\">
														<i class=\"icon-edit icon-white\"></i> Modifica
													</button>
												</a>
											</td>
											<td>
												<a href=\"cancellazione.php?username=$dato[user]&tipo=admin\" onclick=\"return confirm('Sei sicuro di voler cancellare questo admin?')\">
													<button class=\"btn btn-danger\">
														<i class=\"icon-trash icon-white\"></i> Elimina
													</button>
												</a>
											</td>
										</tr>";
								}		
							}
							else{
								echo"<h2>Nessun admin presente</h2><br/>";
							}
						?>
					</table>
				</div>
			</div>
<?php
include("sotto.php");
?>
