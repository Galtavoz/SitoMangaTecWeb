	<?php
		session_start();
		if($_SESSION['user'])include('headerp.html');
		else include('header.html');
		//include('logsign.php');
		include('zoom.php');
		include('footer.html');
	?>
	