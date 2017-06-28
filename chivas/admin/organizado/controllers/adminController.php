<?php
	namespace Controllers;

	use Models\Session as sessionDB;
	use Models\User as userDB;

	class AdminController {

		function getUser($username, $password) {
			$dataUser = userDB::select("id","firstName", "lastName")->where([
			    ['email', '=', $username],
			    ['password', '=', $password],
			    ['status', '=', 'E']
			])->first();
			return $dataUser['attributes'];
		}

		function getSession($id) {
			$sessionUser = sessionDB::select("id")->where("user_id", "=", $id)->first();
			return $sessionUser["attributes"];
		}

		function getKey($id){
			$session_key = sessionDB::select("session_key")->where('user_id', '=', $id)->first();
			if($session_key){
				return $session_key['attributes'];
			} else  {
				$random_key = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
				return $random_key;
			}
		}

		function getDataUser($id) {
			$dataUser = sessionDB::select("data")->where('user_id', '=', $id)->first();
			return $dataUser['attributes'];
		}

		function insertSession($id, $data, $key) {
			$idUser = sessionDB::insertGetId(['user_id' => $id,
				'data' => $data,
				'session_key' => $key,
				'set_time' => time(),
				'dns' => $_SERVER["SERVER_NAME"],
				]);
			return $data;
		}

		function updateSession($id) {
			sessionDB::where('user_id', $id)->update(['set_time' => time()]);
			$data = sessionDB::select("data")->where('user_id', "=",$id)->first();
			return $data;
		}

		function deleteSession($id) {
			$result = sessionDB::where('user_id', '=', $id)->delete();
			return $result;
		}

		function deleteOldSessions($old) {
			$result = sessionDB::where('set_time', '<', $old)->delete();
			return $result;
		}
	}

?>