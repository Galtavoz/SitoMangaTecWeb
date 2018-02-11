<?php
session_regenerate_id(true);
function csrf($cat,$form_id,$op,$token = false){
	switch ($op) {
		case 'generate':
		if (!isset($_SESSION['form'][$cat][$form_id]['data']) or time() - $_SESSION['form'][$cat][$form_id]['data']['valid'] >= 20) {
			$token = md5(microtime().sha1(mt_rand(1,9999),uniqid()).md5($cat.$form_id.$_SERVER['HTTP_USER_AGENT']));
			$_SESSION['form'][$cat][$form_id]['data'] = array('token' => $token , 'valid' => time());
			return $token;
		}
			break;
		case 'validate':
		if ($token) {
			if ($_SESSION['form'][$cat][$form_id]['data']['token'] === $token 
				&& preg_match('/^[a-f0-9]{32}$/', $_SESSION['form'][$cat][$form_id]['data']['token']) 
					&& time() - $_SESSION['form'][$cat][$form_id]['data']['valid'] <= 20) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
			break;
		case 'get':
			return $_SESSION['form'][$cat][$form_id]['data']['token'];
			break;
		default:
			return false;
			break;
	}
}
csrf('inserimento','aggiornamento_news','generate');
?>
