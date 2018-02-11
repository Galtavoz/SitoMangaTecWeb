<?php
include("sopra.php");
include("csrf.php");
csrf('inserisci','inserimento_articolo','generate');
?>
			 <script type="text/javascript" src="js/ckeditor/ckeditor.js" ></script>
			<div class="span9">
          		<div class="row-fluid center">
					<h2 style="font-variant:small-caps;">Nuovo Capitolo</h2><br/>
					<form action="inserimento.php" method="POST">
						<label>Nome Manga</label>
						<select name="titolo" >
							<?php 
								$query=mysql_query("SELECT * FROM manga");
							while($ris=mysql_fetch_array($query))echo"<option value=\"$ris[nome]\">$ris[nome]</option> "?>
						</select>
						<label>Nome Capitolo</label>
						<input type="text" name="nomecap"  placeholder="Nome capitolo"/>
						
				        <div class="form-actions">
					      <button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Aggiungi Manga</button>
					      
					    </div>
						<input type="hidden" name="tipo" value="capitoli"/>
					</form>
				</div>
			</div>
<?php
include("sotto.php");
?>