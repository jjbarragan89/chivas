<?php
	namespace Modules;
	$prefijo = "../";
	require $prefijo."config.php";

	use Controllers\ProductController as productController;
	use Controllers\ManageSession as mSession;

	if(isset($_COOKIE["ywd_fr"]) && isset($_COOKIE["ywd_usu"])){

		$protected = mSession::callProtected();
		mSession::restartSession($_COOKIE['ywd_fr'],$protected);

		$response;
		switch ($_POST["datos"]["action"]) {
			case 'getAllProduct':
				$dataProduct = productController::getAllPorducts();
				if($dataProduct != null) {
					$long = count($dataProduct);
					$dataProduct2;
					for ($i=0; $i < $long; $i++) { 
						$dataProduct2[$i] = $dataProduct[$i]["attributes"];
					}
				} else {
					$dataProduct2 = 0;
				}
				$response["error"] = 1;
				$response["data"] = $dataProduct2;
			break;
			case 'deleteProduct':
				$id = $_POST["datos"]["ipd"];
				$response["data"] = productController::deleteProduct($id);
				$response["error"] = 1;
			break;
			case 'saveEditProduct':
				$id = $_POST["datos"]["d"];
				$name = $_POST["datos"]["nm"];
				$description = $_POST["datos"]["dscrptn"];
				$price = $_POST["datos"]["prc"];
				$image = $_POST["datos"]["mg"];
				$response["data"] = productController::saveEditProduct($id, $name, $description, $price, $image);
				$response["error"] = 1;
			break;
			case 'getAllProductRemoved':
				$dataProduct = productController::getAllProductsRemoved();
				if($dataProduct != null) {
					$long = count($dataProduct);
					$dataProduct2;
					for ($i=0; $i < $long; $i++) { 
						$dataProduct2[$i] = $dataProduct[$i]["attributes"];
					}
				} else {
					$dataProduct2 = 0;
				}
				$response["error"] = 1;
				$response["data"] = $dataProduct2;
			break;
			case 'restoreProduct':
				$id = $_POST["datos"]["d"];
				$response["data"] = productController::restoreProduct($id);
				$response["error"] = 1;
			break;
			default:
				$response["error"] = 0;
			break;
		}
		echo json_encode($response);
	}
?>