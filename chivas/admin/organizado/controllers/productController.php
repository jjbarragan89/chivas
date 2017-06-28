<?php
	namespace Controllers;

	use Models\Product as productDB;

	class ProductController {

		function getAllPorducts(){
			$productData = productDB::select()->where("status", "=", "E")->get();
			if(count($productData) != 0) {
				return $productData;
			} else {
				return null;
			}
		}

		function deleteProduct($id) {
			$product = productDB::where("id", "=", $id)->update(["status" => "D"]);
			return $product;
		}

		function saveEditProduct($id, $name, $description, $price, $image) {
			$response = productDB::where("id", $id )->update(["nombre" => $name, "description" => $description, "price" => $price, "image" => $image]);
			return $response;
		}

		function getAllProductsRemoved() {
			$productData = productDB::select()->where("status", "=", "D")->get();
			if(count($productData) != 0){
				return $productData;
			} else {
				return null;
			}
		}

		function restoreProduct($id) {
			$response = productDB::where("id", $id)->update(["status" => "E"]);
			return $response;
		}
	}
?>