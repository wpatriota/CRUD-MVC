<?php
	/*
	@author Wellington Patriota de Sousa

	Class model de Produtos
	*/
	class Product{
		
		private $id;
		private $name;
		private $description;
		private $price;


		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}


		public function getName(){
			return $this->name;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getDescription(){
			return $this->description;
		}

		public function setDescription($description){
			$this->description = $description;
		}

		public function getPrice(){
			return $this->price;			
		}

		public function setPrice($price){
			$this->price = $price;
		}

		public function getAllProducts(){
			$json = file_get_contents(dirname(__FILE__)."\\..\\data\\data.json");			
			
			$data = json_decode($json, true);

			$arrayProducts = array();

			foreach ($data as $product) {
				$prod = new Product();

				$prod->setId($product['id']);
				$prod->setName($product['name']);
				$prod->setDescription($product['description']);
				$prod->setPrice($product['price']);

				array_push($arrayProducts, $prod);
			}
			return $arrayProducts;
		}

		public function delProduct($id){
			$json = file_get_contents(dirname(__FILE__)."\\..\\data\\data.json");						
			$data = json_decode($json, true);

			$jsonData = array();

			foreach ($data as $prod) {
				if ($prod['id'] != $id) {
					array_push($jsonData, $prod);		
				}
			}

			$jsonData = json_encode($jsonData);
			file_put_contents(dirname(__FILE__)."\\..\\data\\data.json", $jsonData);
		}

		public function addProduct($id, $name, $description, $price){
			$json = file_get_contents(dirname(__FILE__)."\\..\\data\\data.json");						
			$data = json_decode($json, true);

			$newProduct = array(
							"id"          => $id,
							"name"        => $name,
							"description" => $description,
							"price"       => $price);

			array_push($data, $newProduct);

			$jsonData = json_encode($data);

			file_put_contents(dirname(__FILE__)."\\..\\data\\data.json", $jsonData);

		}

		public function editProduct($id, $name, $description, $price){
			$json = file_get_contents(dirname(__FILE__)."\\..\\data\\data.json");						
			$data = json_decode($json, true);
			
			foreach ($data as &$prod) {
				if($prod['id'] == $id){
					$prod['name'] = $name;
					$prod['description'] = $description;
					$prod['price'] = $price;
				}
			}	

			$jsonData = json_encode($data);

			file_put_contents(dirname(__FILE__)."\\..\\data\\data.json", $jsonData);

		}
	}
?>