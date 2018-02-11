<?php
include("sopra.php");
include("csrf.php");
csrf('inserisci','inserimento_utente','validate');
?>
			<script type="text/javascript" src="js/bootstrap-filestyle.min.js" ></script>
			<div class="span9">
          		<div class="row-fluid left">
					<h2 style="font-variant:small-caps;">Nuovo Admin</h2><br/>
					<form action="inserimento.php" method="POST">
						<div class="row-fluid center">
							<label>Username </label><input type="text" name="username"  placeholder="Username"/>
							<label>Password </label><input type="password" name="password"  placeholder="Password"/></br>
							<label>Nome e Cognome</label><input type="text" name="nome"  placeholder="Nome e Cognome"/></br>
						</div>	
				        <div class="row-fluid center">
							<div class="form-actions">
							  <button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Inserisci</button>
							  <button class="btn" name="reset" type="reset"><i class="icon-refresh"></i> Reset</button>
							</div>
						</div>
						<input type="hidden" name="tipo" value="admin"/>
					</form>
				</div>
			</div>
<?php
include("sotto.php");
?>