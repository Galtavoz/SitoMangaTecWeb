<?php
include("sopra.php");
include("csrf.php");
?>
			<?php
				$ris=mysql_query("SELECT * FROM aboutus") or die(mysql_error());
				$dato=mysql_fetch_array($ris);
				csrf('modifca','aggiornamento_articolo','generate');
			?>
			<script type="text/javascript" src="js/ckeditor/ckeditor.js" ></script>
			<div class="span9">
          		<div class="row-fluid center">
					<h2 style="font-variant:small-caps;">Modifica About US</h2><br/>
					<form action="modifica.php" method="POST">
						<textarea name="contenuto" id="contenuto"><?=$dato['aboutus']?></textarea><br>
						<script type="text/javascript">
			            	CKEDITOR.replace("contenuto");
			            </script>
				        <div class="form-actions">
					      <button class="btn btn-primary" type="submit"><i class="icon-edit icon-white"></i> Modifica About Us</button>
					      
					    </div>
						<input type="hidden" name="tipo" value="about"/>
					</form>
				</div>
			</div>
<?php
include("sotto.php");
?>
