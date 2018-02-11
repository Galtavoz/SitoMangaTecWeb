<?php
include("sopra.php");
$err = array();
$err['count'] = 0;
?>
	<div class="span9">
        <div class="row-fluid center">
<?php
	switch ($_POST['tipo']) {
		case 'manga':
		
			if(isset($_POST['autore']) && strlen($_POST['autore']) <= 128){
				$autore = $_POST['autore'];
			} else {
				$err['count']++;
				$err['autore'] = array('errore' => 'Nome Autore vuoto o troppo lungo');
			}
			if(isset($_POST['inizio'])){
				$inizio = $_POST['inizio'];
			} else {
				$err['count']++;
				$err['inizio'] = array('errore' => 'Manca Data Inizio');
			}
			if(isset($_POST['fine'])){
				$fine = $_POST['fine'];
			} else {
				$err['count']++;
				$err['fine'] = array('errore' => 'Manca Data Fine');
			}
			if(isset($_POST['ultimo'])){
				$ultimo = $_POST['ultimo'];
			} else {
				$err['count']++;
				$err['ultimo'] = array('errore' => 'Manca Data Ultimo capitolo');
			}
			if(isset($_POST['capitoli'])){
				$capitoli = $_POST['capitoli'];
			} else {
				$err['count']++;
				$err['capitoli'] = array('errore' => 'N capioli vuoti');
			}
			if(isset($_POST['mipiace'])){
				$mipiace = $_POST['mipiace'];
			} else {
				$err['count']++;
				$err['mipiace'] = array('errore' => 'N mi piace vuoti');
			}
			if(isset($_POST['commenti'])){
				$commenti = $_POST['commenti'];
			} else {
				$err['count']++;
				$err['commenti'] = array('errore' => 'N commenti vuoto');
			}
			if(isset($_POST['immagine'])){
				$immagine = $_POST['immagine'];
			} else {
				$err['count']++;
				$err['immagine'] = array('errore' => 'Percorso immagine vuoto');
			}
			if(isset($_POST['descrizione'])){
				$descrizione = $_POST['descrizione'];
			} else {
				$err['count']++;
				$err['descrizione'] = array('errore' => 'Descrizione vuota o troppo lunga');
			}
			if ($err['count'] === 0) {
				$query=mysql_query("UPDATE manga SET autore = '$autore',inizio = '$inizio',fine='$fine',descrizione = '$descrizione',capitoli= '$capitoli',ultimo='$ultimo',commenti='$commenti',mipiace='$mipiace',immagine='$immagine' WHERE nome = '$_POST[nome]' ") or die(mysql_error());
				if($query){
					echo"<div class=\"alert alert-success\">Modifica articolo effettuata con successo</div>";
				}
				else{
					echo"<div class=\"alert alert-error\">Errore modifica articolo!</div>";
				}
			}
			else {
				foreach ($err as $key => $value) {
					if (is_array($value)) {
						echo '<div class="alert alert-error">'.$value['errore'].'</div>';
					}
				}
			}
		break;
		
		case 'progetto':
		
			if(isset($_POST['id'])){
				(int)$id = $_POST['id'];
			} else {
				$err['count']++;
				$err['id'] = array('errore' => 'Id non valido');
			}
			if(isset($_POST['titolo']) && strlen($_POST['titolo']) <= 128){
				$titolo = $_POST['titolo'];
			} else {
				$err['count']++;
				$err['titolo'] = array('errore' => 'Titolo vuoto o troppo lungo');
			}
			if(isset($_POST['contenuto'])){
				$contenuto = $_POST['contenuto'];
			} else {
				$err['count']++;
				$err['contenuto'] = array('errore' => 'Contenuto vuoto o troppo lungo');
			}
			if ($err['count'] === 0) {
				$query=mysql_query($connessione,"UPDATE immagini SET titolo = '".$titolo."',testo = '".$contenuto."',autore= '".$_SESSION['nome']."' ,data=now() WHERE id = $id ") or die(mysql_error());
				if(mysql_affected_rows($query)){
					echo"<div class=\"alert alert-success\">Modifica Progetto effettuata con successo</div>";
				}
				else{
					echo"<div class=\"alert alert-error\">Errore modifica Progetto!</div>";
				}
			}
			else {
				foreach ($err as $key => $value) {
					if (is_array($value)) {
						echo '<div class="alert alert-error">'.$value['errore'].'</div>';
					}
				}
			}
		break;
		
		case 'about':
			if(isset($_POST['contenuto'])){
				$contenuto = $_POST['contenuto'];
			} else {
				$err['count']++;
				$err['contenuto'] = array('errore' => 'Contenuto vuoto o troppo lungo');
			}
			if ($err['count'] === 0) {
				$query=mysql_query("UPDATE aboutus SET aboutus = '".$contenuto."'") or die(mysql_error());
				if($query){
					echo"<div class=\"alert alert-success\">Modifica Chi Siamo effettuata con successo</div>";
				}
				else{
					echo"<div class=\"alert alert-error\">Errore modifica Chi Siamo!</div>";
				}
			}
			else {
				foreach ($err as $key => $value) {
					if (is_array($value)) {
						echo '<div class="alert alert-error">'.$value['errore'].'</div>';
					}
				}
			}
		break;
		
			break;
			case 'contatti':
			if(isset($_POST['contenuto'])){
				$contenuto = $_POST['contenuto'];
			} else {
				$err['count']++;
				$err['contenuto'] = array('errore' => 'Contenuto vuoto o troppo lungo');
			}
			if ($err['count'] === 0) {
				$query=mysql_query($connessione,"UPDATE news SET messaggio = '".$contenuto."',mittente= '".$_SESSION['nome']."' ,data=now() WHERE page = 7 ") or die(mysql_error());
				if(mysql_affected_rows($query)){
					echo"<div class=\"alert alert-success\">Modifica Contatti effettuata con successo</div>";
				}
				else{
					echo"<div class=\"alert alert-error\">Errore modifica Contatti!</div>";
				}
			}
			else {
				foreach ($err as $key => $value) {
					if (is_array($value)) {
						echo '<div class="alert alert-error">'.$value['errore'].'</div>';
					}
				}
			}
		break;
		
		
		
		
		default:
			return false;
		break;
	}
	$dest = '';
	switch ($_POST['tipo']) {
		case 'articolo':
			$dest='articoli.php';
			break;

		case 'admin':
			$dest='admin.php';
			break;
        

		case 'progetti':
			$dest='progetti.php';
			break;
		
		case 'storia':
			$dest='chisiamo.php';
			break;
			
		case 'fhome':
			$dest='gfhome.php';
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
