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
			
			if(isset($_POST['titolo']) && strlen($_POST['titolo']) <= 128){

				$titolo = $_POST['titolo'];

			} else {

				$err['count']++;

				$err['titolo'] = array('errore' => 'Titolo vuoto o troppo lungo');

			}
			if(isset($_POST['autore']) && strlen($_POST['autore']) <= 128){

				$autore = $_POST['autore'];

			} else {

				$err['count']++;

				$err['autore'] = array('errore' => 'Autore vuoto o troppo lungo');

			}
			if(isset($_POST['inizio'])){

				$inizio = $_POST['inizio'];

			} else {

				$err['count']++;

				$err['inizio'] = array('errore' => 'Manca Data di inizio');

			}
			if(isset($_POST['immagine']) && strlen($_POST['immagine']) <= 128){

				$immagine = $_POST['immagine'];

			} else {

				$err['count']++;

				$err['immagine'] = array('errore' => 'Percorso immagine vuoto o troppo lungo');

			}

			if(isset($_POST['descrizione'])){

				$descrizione = $_POST['descrizione'];

			} else {

				$err['count']++;

				$err['descrizione'] = array('errore' => 'Descrizione vuota o troppo lunga');

			}
			


			if ($err['count'] === 0) {
				$rand=rand();
				$query=mysql_query("INSERT INTO `manga` (`nome`, `autore`, `inizio`, `fine`, `descrizione`, `capitoli`, `ultimo`, `commenti`, `mipiace`, `immagine`, `codice`) VALUES ('$titolo', '$autore', '$inizio', '', '$descrizione', '0', '', '0', '0', '$immagine', '$rand');") or die(mysql_error());

				if($query){

					echo"<div class=\"alert alert-success\">Inserimento manga effettuato con successo</div>";

				}

				else{

					echo"<div class=\"alert alert-error\">Errore inserimento manga!</div>";

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
			case 'capitoli':
				if(isset($_POST['titolo'])){

				$titolo = $_POST['titolo'];

			} else {

				$err['count']++;

				$err['titolo'] = array('errore' => 'Manga non selezionato');

			}
			if(isset($_POST['nomecap']) && strlen($_POST['nomecap']) <= 128){

				$nomecap = $_POST['nomecap'];

			} else {

				$err['count']++;

				$err['nomecap'] = array('errore' => 'Nome capitolo non inserito');
			}
			if ($err['count'] === 0) {
				$first=mysql_query("SELECT * FROM capitoli WHERE nome='$titolo'");
				$ris=mysql_fetch_array($first);
				$numero=$ris['numero']+1;
				$data=date("Y/m/d", time());
				$query=mysql_query("INSERT INTO `capitoli` (`nome`, `numero`, `nomecap`, `dataagg`) VALUES ('$titolo', '$numero', '$nomecap','$data')") or die(mysql_error());
				if($query){
						 
					echo"<div class=\"alert alert-success\">Inserimento capitolo effettuato con successo</div>";

				}

				else{

					echo"<div class=\"alert alert-error\">Errore inserimento capitolo!</div>";

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

		case 'admin':

			if(isset($_POST['username']) && strlen($_POST['username']) <= 32){

				$username = $_POST['username'];

			} else {

				$err['count']++;

				$err['username'] = array('errore' => 'Username vuoto o troppo lungo');

			}

			if(isset($_POST['password']) && strlen($_POST['password']) <= 32){

				$password = $_POST['password'];

			} else {

				$err['count']++;

				$err['password'] = array('errore' => 'Password vuoto o troppo lungo');

			}

			if(isset($_POST['nome']) && strlen($_POST['nome']) <= 64){

				$nome = $_POST['nome'];

			} else {

				$err['count']++;

				$err['nome'] = array('errore' => 'Nome vuoto o troppo lungo');

			}

			if ($err['count'] === 0) {

				mysql_query("INSERT INTO admin(user,pass,nome) VALUES ('$username',MD5('".$password."'),'$nome')") or die(mysql_error());

				if(mysql_affected_rows()){

					echo"

						<div class=\"alert alert-success\">Inserimento admin effettuato con successo</div>";

				}

				else{

					echo"<div class=\"alert alert-error\">Errore inserimento admin!</div>";

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
		
	}

	$dest = '';

	switch ($_POST['tipo']) {

		case 'articolo':

			$dest='avvisi.php';

			break;

		case 'admin':

			$dest='admin.php';

			break;

       	case 'capitoli':

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



