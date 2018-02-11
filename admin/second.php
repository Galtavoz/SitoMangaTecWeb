<?php
error_reporting(0);
function cleanRequest($Array){
  if (is_array($Array)) {
   array_walk_recursive($Array, function(&$item, $key){
    $item = preg_replace('/[^\s{}a-z0-9_\.\-]/i', '', urldecode( $item ) );
    $item = htmlentities($item,ENT_QUOTES,'utf-8');
   });
  } else {
   $Array = htmlentities($Array,ENT_QUOTES,'utf-8');
  }
  return $Array;
 }
$_POST = cleanRequest($_POST);
$_GET = cleanRequest($_GET);
	//Session Init
	session_start() or die();

	//
	require("config.php");
	////////////Function///////////
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	//
	
	$username = isset($_POST['user']) ? $_POST['user']:'';
	$password = isset($_POST['pass']) && is_string($_POST['pass']) ? $_POST['pass']:'';
	

	
	
	$query = mysql_query("SELECT * FROM admin WHERE user='$username' and pass='$password'");
	$n=mysql_affected_rows();
	if(!$query && $n!=1){
		die('Nome utente o password sbagliata');
	}
	$res = mysql_fetch_array($query);
	
	$_SESSION['username'] = $user;
	$_SESSION['nome'] = $res['nome'];
	$_SESSION['valid'] = strtotime('+10 minutes',time());
	$_SESSION['Ua'] = $_SERVER['HTTP_USER_AGENT'];
	$_SESSION['Ip'] = $_SERVER['REMOTE_ADDR'];
	
		echo"<meta http-equiv=\"refresh\" content=\"0; url=home.php\">";
?>
