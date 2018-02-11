<?php
include("sopra.php");
?>
        <div class="span9">
          <div class="row-fluid center">
          	<form method="POST" action="reset_psw.php">
		      	<label>Vecchia Password:</label> <input name="old_password" type="password" value="" /><br>
		     	<label>Nuova Password:</label> <input name="new_password" type="password" value="" /><br>
		    	<label>Ripeti Password:</label> <input name="check_password" type="password" value="" /><br>
		      	<input class="btn btn-info" name="invia" type="submit" value="Cambia!" />
		    </form>
          </div>
        </div>
<?php
include("sotto.php");
?>