	<?php
		session_start();
		if($_SESSION['user']){include('headerp.html');}
		else{	include('header.html');}
		include('logsign.php');
		include('vetrina.html');
		include('ultimih.php');
		include('popolarih.php');
		include('footer.html');
	?>
	