
	<div id="top">
		<img src="img/aboutUs.jpeg" id="sfondo">
	</div>
	<div id="content">
	<h2>ABOUT US</h2><br>
	<?php
		require('config.php');
		$query = mysql_query("SELECT * FROM aboutus") or die(mysql_error());
		$dato = mysql_fetch_array($query);
		echo"$dato[aboutus]";
	?>
	</div>
