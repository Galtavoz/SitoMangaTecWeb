<?php
include("sopra.php");
?>
	<div class="span9">
        <div class="row-fluid center">
<?php
	switch ($_GET['tipo']) {
		case 'admin':
			$username=$_GET['username'];
			mysql_query("DELETE FROM admin WHERE user=\"$username\"");
			if(mysql_affected_rows()){
				echo"<div class=\"alert alert-success\">Cancellazione admin effettuata con successo</div>";
			}
			else{
				echo"<div class=\"alert alert-error\">Errore cancellazione admin!</div>";
			}
		break;
		case 'manga':
			$nome=$_GET['id'];
			$ris= mysql_query("DELETE FROM manga WHERE nome='$nome'");
			if($ris){
				echo"<div class=\"alert alert-success\">Cancellazione avviso effettuata con successo</div>";
			}
			else{
				echo"<div class=\"alert alert-error\">Errore cancellazione avviso!</div>";
			}
		break;
			case 'capitolo':
			$nome=$_GET['id'];
			$ris=mysql_query("DELETE FROM capitoli WHERE id='$nome'");
			if($ris){
				echo"<div class=\"alert alert-success\">Cancellazione contatto effettuata con successo</div>";
			}
			else{
				echo"<div class=\"alert alert-error\">Errore cancellazione contatto!</div>";
			}
		
		
	}
	$dest = '';
	switch ($_GET['tipo']) {
		case 'manga':
			$dest='avvisi.php';
			break;

		case 'admin':
			$dest='admin.php';
			break;

		case 'capitolo':
			$dest='capitoli.php';
		break;
		default:
			$dest='home.php';
		break;
	}
	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=".$dest."\">";
?>
	</div>
</div>
<?php
include("sotto.php");
?>
