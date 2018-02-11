<?php
include("sopra.php");
include("csrf.php");
csrf('inserisci','inserimento_articolo','generate');
?>
			 <script type="text/javascript" src="js/ckeditor/ckeditor.js" ></script>
			<div class="span9">
          		<div class="row-fluid center">
					<h2 style="font-variant:small-caps;">Nuovo Progetto</h2><br/>
					<form action="inserimento.php" method="POST">
						<label>Titolo progetto</label>
						<input type="text" name="titolo"  placeholder="Titolo Progetto"/>
						<label>Immagine Progetto</label>
						<input type="text" name="immagine"  placeholder="Percorso Progetto"/>
						<label>Contenuto</label>
						<textarea name="contenuto" id="contenuto"></textarea><br>
						<script type="text/javascript">
			            	CKEDITOR.replace("contenuto");
			            </script>
				        <div class="form-actions">
					      <button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Crea progetto</button>
					      
					    </div>
						<input type="hidden" name="tipo" value="progetto"/>
					</form>
				</div>
			</div>
<?php
include("sotto.php");
?>