<?php
session_start();
$_SESSION = array();
session_unset();
session_destroy();
echo"<meta http-equiv=\"refresh\" content=\"0; url=home.php\">";
?>