<?php
	namespace Controllers;

	use Controllers\ManageSession as mSession;
	use Models\User as userDB;

	class UserController {

		function init(){
			$protected = mSession::callProtected();
			$idUser = mSession::decryptSession($_COOKIE['ywd_fr'],$protected);
			$dataUser = userDB::select("idProfile")->where("id", "=", $idUser)->first();
			return $dataUser["attributes"];
		}
	}
?>