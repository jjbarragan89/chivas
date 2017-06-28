<?php
	namespace Modules;
	$prefijo = "../";
	require $prefijo.'config.php';

	use Controllers\AdminController as admController;
	use Controllers\manageSession as mSession;

	if(isset($_COOKIE["ywd_fr"]) && isset($_COOKIE["ywd_usu"])){
		$response["login"] = true;
		echo json_encode($response);
	} else {
		$datos = $_POST["datos"];
		$userData = admController::getUser($datos["username"], $datos["password"]);
		
		if($userData["id"] != "" ){
			mSession::createSession($userData["id"]);
			$response["login"] = true;
			echo json_encode($response);
		} else {
			$response["login"] = false;
			echo json_encode($response);
		}
	}


?>