<?php
	require "/../model/product.php";
	require "/../view/viewProduct.php";
	require "/../view/viewProductAdmin.php";

	/*
	@author Wellington Patriota de Sousa

	Class controller para produtos
	*/
	class ProductController{
		//LISTA TODOS OS PRODUTOS NA HOME
		public function listProducts(){
			$model = new Product();
			$list = $model->getAllProducts();

			$view = new viewProduct();

			$view->render($list);
		}

		//LISTA TODOS OS PRODUTOS NO PAINEL ADMIN
		public function listProductsAdmin(){
			$model = new Product();
			$list = $model->getAllProducts();

			$view = new viewProductAdmin();

			$view->render($list);
		}

		//INSERIR NOVO PRODUTO
		public function addProduct($id, $name, $description, $price){
			try {
				$model = new Product();
				$model->addProduct($id, $name, $description, $price);	

				return true;
			} catch (Exception $e) {
				return $e;
			}
			
		}

		//DELETAR UM PRODUTO
		public function delProduct($id){
			try {
				$model = new Product();
				$model->delProduct($id);	

				return true;
			} catch (Exception $e) {
				return $e;
			}
		}

		//EDITAR UM PRODUTO
		public function editProduct($id, $name, $description, $price){
			try {
				$model = new Product();
				$model->editProduct($id, $name, $description, $price);	

				return true;
			} catch (Exception $e) {
				return $e;
			}
			
		}
	}
?>