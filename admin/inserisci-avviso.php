<?php
include("sopra.php");
include("csrf.php");
csrf('inserisci','inserimento_articolo','generate');
?>
			 <script type="text/javascript" src="js/ckeditor/ckeditor.js" ></script>
			<div class="span9">
          		<div class="row-fluid center">
					<h2 style="font-variant:small-caps;">Nuovo Manga</h2><br/>
					<form action="inserimento.php" method="POST">
						<label>Nome Manga</label>
						<input type="text" name="titolo"  placeholder="Nome Manga"/>
						<label>Autore Manga</label>
						<input type="text" name="autore"  placeholder="Autore"/>
						<label>Immagine Manga</label>
						<input type="text" name="immagine"  placeholder="img/..."/>
						<label>Inizio</label>
						<input type="date" name="inizio"  placeholder="Inizio Manga"/>
						<label>Descrizione</label>
						<textarea name="descrizione" id="contenuto"></textarea><br>
						<script type="text/javascript">
			            	CKEDITOR.replace("contenuto");
			            </script>
				        <div class="form-actions">
					      <button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Aggiungi Manga</button>
					      
					    </div>
						<input type="hidden" name="tipo" value="manga"/>
					</form>
				</div>
			</div>
<?php
include("sotto.php");
?>