<?php
	namespace Controllers;

	use Controllers\AdminController as admController;

	class ManageSession {

		function __construct() {
			session_set_save_handler(
				array($this, 'read'),
				array($this, 'write'),
				array($this, 'destroy'),
				array($this, 'garbageCollection'));

			register_shutdown_function('session_write_close');
		}

		function start_session($session_name, $secure) {
			$httponly = true;

			$session_hash = "sha512";

			if(in_array($session_hash, hash_algos())){
				ini_set('session.hash_function', $session_hash);
			}

			ini_set('session.hash_bits_per_character', 5);
			ini_set('session.user_only_cookies', 1);

			$cookieParams = session_get_cookie_params();

			session_set_cookie_params(
				$cookieParams["lifetime"],
				$cookieParams["path"],
				$cookieParams["domain"],
				$secure,
				$httponly);

			session_name($session_name);

			session_start();

			session_regenerate_id(true);
		}

		function encriptSession($data, $key) {
			$salt = 'cH!swe!retReGu7W6bEDRup7usuDUh9THeD2CHeGE*ewr4n39=E@rAsp7c-Ph@pH';
			$key = substr(hash('sha256', $salt.$key.$salt), 0, 32);

			$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
			$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
			$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $data, MCRYPT_MODE_ECB, $iv));

			return $encrypted;
		}

		function decryptSession($data, $key) {
			$salt = 'cH!swe!retReGu7W6bEDRup7usuDUh9THeD2CHeGE*ewr4n39=E@rAsp7c-Ph@pH';
			$key = substr(hash('sha256', $salt.$key.$salt), 0, 32);

			$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
			$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
			$decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($data), MCRYPT_MODE_ECB, $iv);
			$decrypted = rtrim($decrypted, "\0");

			return $decrypted;
		}

		function callProtected() {
			$protected = '$f1nd3s3m0n4c00k13';
			return $protected;
		}

		function site_protocol() {
			if(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&  $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')  return $protocol = 'https://'; else return $protocol = 'http://';
		}

		function write($id, $data) {
			$key = admController::getKey($id);
			$data = manageSession::encriptSession($data, $key);
			$result = admController::insertSession($id, $data, $key);

			return $result;
		}

		function read($id) {
			$data = admController::getDataUser($id);
			$key = admController::getKey($id);
			$data = manageSession::decryptSession($data,$key);
			return $data;
		}

		function destroy($id) {
			$result = admController::deleteSession($id);
			return $result;
		}

		function garbageCollection($max) {
			$old = time() - $max;
			$result = admController::deleteOldSessions($old);
			return $result;
		}

		function createSession($user_id) {
			$protected = ManageSession::callProtected();
			$protocol = ManageSession::site_protocol();
			if($protocol == "https://"){
				$secure=true; 
				$httponly=true;
			}else{
				$secure=false;
				$httponly=true;
			}

			$data = $user_id."~".$_SERVER['SERVER_NAME'].'~32489';
			$userSession = admController::getSession($user_id);
			if($userSession["id"] == "") {
				$createSession = ManageSession::write($user_id, $data, $_SERVER['SERVER_NAME']);
			} else {
				$createSession = $data;
			}
			$createCookieU = ManageSession::start_session('ywd_usu', true);
			$cookieData = ManageSession::encriptSession($user_id, $protected);

			/*Se crea cookie de usuario*/
			setcookie('ywd_fr',$cookieData, time() + 1200, '/');
			setcookie('ywd_usu', $createSession, time() + 1200, '/');
		}

		function restartSession() {
			$protected = ManageSession::callProtected();
			$idUser = ManageSession::decryptSession($_COOKIE['ywd_fr'],$protected);
			$dataSession = admController::updateSession($idUser);
			admController::deleteOldSessions(time());
			$cookieData = ManageSession::encriptSession($idUser, $protected);
			setcookie('ywd_fr',$cookieData, time() + 1200, '/');
			setcookie('ywd_usu', $dataSession, time() + 1200, '/');
		}
	}
?>