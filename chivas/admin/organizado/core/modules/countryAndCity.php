<?php
	namespace Modules;
	$prefijo = "../";
	require $prefijo."config.php";

	use Controllers\CountryController as countryController;
	use Controllers\CityController as cityController;
	use Controllers\ManageSession as mSession;

	if(isset($_COOKIE["ywd_fr"]) && isset($_COOKIE["ywd_usu"])){
		$response;
		switch ($_POST["datos"]["action"]) {
			case 'getAllCountry':
				$dataCountries = countryController::getAllCountry();
				if($dataCountries != null) {
					$long = count($dataCountries);
					$dataCountries2;
					for ($i=0; $i < $long; $i++) { 
						$dataCountries2[$i] = $dataCountries[$i]["attributes"];
					}
					$response["data"] = $dataCountries2;
					$response["error"] = 0;
				} else {
					$response["data"] = 0;
					$response["error"] = 0;
				}
			break;
			case 'getAllCityCountry':
				$idCountry = $_POST["datos"]["dCntr"];
				$dataCities = cityController::getAllCityCountry($idCountry);
				if($dataCities != null){
					$long = count($dataCities);
					$dataCities2;
					for ($i=0; $i < $long; $i++) { 
						$dataCities2[$i] = $dataCities[$i]["attributes"];
					}
					$response["data"] = $dataCities2;
					$response["error"] = 1;
				} else {
					$response["data"] = 0;
					$response["error"] = 0;
				}
			break;
			case 'getAllCity':
				$dataCities = cityController::getAllCity();
				if($dataCities != null){
					$long = count($dataCities);
					$dataCities2;
					for ($i=0; $i < $long; $i++) { 
						$dataCities2[$i] = $dataCities[$i]["attributes"];
					}
					$response["data"] = $dataCities2;
					$response["error"] = 1;
				} else {
					$response["data"] = 0;
					$response["error"] = 0;
				}
			break;
			case 'eraseCity':
				$idCity = $_POST["datos"]["dCt"];
				$response["data"] = cityController::deleteCity($idCity);
				$response["error"] = 1;
			break;
			case 'saveEditCity':
				$id = $_POST["datos"]["d"];
				$name = $_POST["datos"]["nm"];
				$maxCapacity = $_POST["datos"]["mxCpct"];
				$response["data"] = cityController::updateCity($id, $name, $maxCapacity);
				$response["error"] = 1;
			break;
			case 'getAllCitiesRemoved':
				$dataCities = cityController::getAllCityRemoved();
				if($dataCities != null){
					$long = count($dataCities);
					$dataCities2;
					for ($i=0; $i < $long; $i++) { 
						$dataCities2[$i] = $dataCities[$i]["attributes"];
					}
					$response["data"] = $dataCities2;
					$response["error"] = 1;
				} else {
					$response["data"] = 0;
					$response["error"] = 0;
				}
			break;
			case 'restoreCity':
				$idCity = $_POST["datos"]["d"];
				$response["data"] = cityController::restoreCity($idCity);
				$response["error"] = 1;
			break;
			default:
				$response["error"] = 0;
			break;
		}
		echo json_encode($response);
	}
?>