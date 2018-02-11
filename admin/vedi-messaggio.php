<?php
include("sopra.php");
include("csrf.php");
?>
			<?php
				$messaggio=$_GET['id'];
				$ris = mysql_query("SELECT * FROM contatti WHERE id = '$messaggio' ") or die(mysql_error());
				$dato = mysql_fetch_array($ris);
				csrf('modifca','aggiornamento_articolo','generate');
			?>
			<script type="text/javascript" src="js/ckeditor/ckeditor.js" ></script>
			<div class="span9">
          		<div class="row-fluid center">
					<h2 style="font-variant:small-caps;">Vedi Messaggio</h2><br/>
						<textarea name="contenuto" id="contenuto"><?=$dato['messaggio']?></textarea><br>
				</div>
			</div>
<?php
include("sotto.php");
?>
