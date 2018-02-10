	<?php
	session_start();
		if($_SESSION['user'])include('header.html');
		else include('header.html');
		//include('logsign.php');
		include('logsignm.html');
		include('footer.html');
	?>