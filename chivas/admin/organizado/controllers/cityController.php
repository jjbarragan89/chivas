<?php
	namespace Controllers;
	use Models\Country as countryDB;
	use Models\City as cityDB;

	class CityController {

		function getAllCity() {
			$dataCity = cityDB::join('pg_admin_country', 'pg_city.idCountry', '=', 'pg_admin_country.id')
				->select("pg_admin_country.*", "pg_admin_country.name as countryName", "pg_city.*", "pg_city.maxCapacity", "pg_city.name as cityName", "pg_city.id as cityId")
				->where([["pg_city.status", "=", "E"], ['pg_admin_country.status', "=", "E"]])
				->get();
			if(count($dataCity) != 0) {
				return $dataCity;
			} else {
				return null;
			}
		}

		function getAllCityCountry($idCountry) {
			$dataCity = cityDB::join('pg_admin_country', 'pg_city.idCountry', '=', 'pg_admin_country.id')
				->select("pg_admin_country.*", "pg_admin_country.name as countryName", "pg_city.*", "pg_city.maxCapacity", "pg_city.name as cityName", "pg_city.id as cityId")
				->where([["pg_city.status", "=", "E"], ['pg_admin_country.status', "=", "E"], ['pg_admin_country.id', "=", $idCountry]])
				->get();
			if(count($dataCity) != 0) {
				return $dataCity;
			} else {
				return null;
			}
		}

		function deleteCity($id) {
			$result = cityDB::where("id",$id)->update(["status" => "D"]);
			return $result;
		}

		function updateCity($id, $name, $maxCapacity) {
			$result = cityDB::where("id", $id)->update(["name" => $name, "maxCapacity" => $maxCapacity]);
			return $result;
		}

		function getAllCityRemoved() {
			$dataCity = cityDB::join('pg_admin_country', 'pg_city.idCountry', '=', 'pg_admin_country.id')
				->select("pg_admin_country.*", "pg_admin_country.name as countryName", "pg_city.*", "pg_city.maxCapacity", "pg_city.name as cityName", "pg_city.id as cityId")
				->where([["pg_city.status", "=", "D"], ['pg_admin_country.status', "=", "E"]])
				->get();
			if(count($dataCity) != 0) {
				return $dataCity;
			} else {
				return null;
			}
		}

		function restoreCity($id) {
			$result = cityDB::where("id", $id)->update(["status" => "E"]);
			return $result;
		}
	}
?>