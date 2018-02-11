<?php
include("sopra.php");
include("csrf.php");
?>
			<?php
				$articolo=$_GET['id'];
				$ris== mysqli_query($connessione,"SELECT * FROM immagini WHERE id = '$articolo'") or die(mysqli_error());
				$dato=mysqli_fetch_array($ris);
				csrf('modifca','aggiornamento_articolo','generate');
			?>
			<script type="text/javascript" src="js/ckeditor/ckeditor.js" ></script>
			<div class="span9">
          		<div class="row-fluid center">
					<h2 style="font-variant:small-caps;">Modifica Articolo</h2><br/>
					<form action="modifica.php" method="POST">
						<label>Titolo articolo</label>
						<input type="text" name="titolo" value="<?=$dato['titolo']?>" />
						<label>Contenuto</label>
						<textarea name="contenuto" id="contenuto"><?=$dato['testo']?></textarea><br>
						<script type="text/javascript">
			            	CKEDITOR.replace("contenuto");
			            </script>
				        <div class="form-actions">
					      <button class="btn btn-primary" type="submit"><i class="icon-edit icon-white"></i> Modifica articolo</button>
					      <button class="btn" name="reset" type="reset"><i class="icon-refresh"></i> Reset</button>
					    </div>
						<input type="hidden" name="tipo" value="articolo"/>
						<input type="hidden" name="id" value="<?=$dato['id']?>" />
					</form>
				</div>
			</div>
<?php
include("sotto.php");
?>
