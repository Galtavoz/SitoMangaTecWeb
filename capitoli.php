<?php
	session_start();
		if($_SESSION['user'])include('headerp.html');
		else include('header.html');
		include('cap.php');
?>