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
	
	$user = isset($_POST['username']) ? $_POST['username']:'';
	$password = isset($_POST['password']) && is_string($_POST['password']) ? $_POST['password']:'';
	
	
	
	
	$query = mysql_query("SELECT * FROM utenti WHERE user = '$user' and pass = '$password'") or die ('Nome utente o password sbagliata');
	$res = mysql_fetch_array($query);
	
	if($res['user']!=$user || $res['pass']!=$password){
		die('Nome utente o password sbagliata');
	}
	session_start();
	$_SESSION['user'] = $user;
	$_SESSION['valid'] = strtotime('+10 minutes',time());
	$_SESSION['Ua'] = $_SERVER['HTTP_USER_AGENT'];
	$_SESSION['Ip'] = $_SERVER['REMOTE_ADDR'];
	
	echo"<meta http-equiv=\"refresh\" content=\"0; url=personal.php\">";
?>
