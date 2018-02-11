<?php
include("sopra.php");
include("csrf.php");
?>
			<?php
				$manga=$_GET['id'];
				$ris= mysql_query("SELECT * FROM manga WHERE nome = '$manga'") or die(mysql_error());
				$dato=mysql_fetch_array($ris);
				csrf('modifca','aggiornamento_articolo','generate');
			?>
			<script type="text/javascript" src="js/ckeditor/ckeditor.js" ></script>
			<div class="span9">
          		<div class="row-fluid center">
					<h2 style="font-variant:small-caps;">Modifica Manga - <?=$dato['nome']?></h2><br/>
					<form action="modifica.php" method="POST">
						<label>Autore Manga</label>
						<input type="text" name="autore" value="<?=$dato['autore']?>" />
						<label>Inizio</label>
						<input type="date" name="inizio" value="<?=$dato['inizio']?>" />
						<label>Fine</label>
						<input type="date" name="fine"  value="<?=$dato['fine']?>"/>
						<label>Capitoli</label>
						<input type="text" name="capitoli" value="<?=$dato['capitoli']?>" />
						<label>Ultimo</label>
						<input type="text" name="ultimo" value="<?=$dato['ultimo']?>" />
						<label>Finito(1 si,0 no)</label>
						<input type="text" name="commenti" value="<?=$dato['finito']?>" />
						<label>Mi piace</label>
						<input type="text" name="mipiace" value="<?=$dato['mipiace']?>" />
						<label>Immagine Manga</label>
						<input type="text" name="immagine" value="<?=$dato['immagine']?>" />
						<label>Descrizione</label>
						<textarea name="descrizione" id="contenuto"><?=$dato['descrizione']?></textarea><br>
						<script type="text/javascript">
			            	CKEDITOR.replace("contenuto");
			            </script>
				        <div class="form-actions">
					      <button class="btn btn-primary" type="submit"><i class="icon-edit icon-white"></i> Modifica avviso</button>
					      <button class="btn" name="reset" type="reset"><i class="icon-refresh"></i> Reset</button>
					    </div>
						<input type="hidden" name="tipo" value="manga"/>
						<input type="hidden" name="nome" value="<?=$dato['nome']?>"/>
						<input type="hidden" name="id" value="<?=$dato['id']?>" />
					</form>
				</div>
			</div>
<?php
include("sotto.php");
?>
