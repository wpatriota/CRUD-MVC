<?php
	/*
	@author Wellington Patriota de Sousa

	Recebe as requisições de AjAX e envia para os controllers
	*/
	require "/../controller/productController.php";

	$action = $_POST['action'];

	switch ($action) {
		case 'addProduct':
			$prod = new productController();
			$prod->addProduct($_POST['id'], $_POST['name'], $_POST['description'], $_POST['price']);

			break;
		
		case 'delProduct':
			$prod = new productController();
			$prod->delProduct($_POST['id']);

			break;

		case 'editProduct':
			$prod = new productController();
			$prod->editProduct($_POST['id'], $_POST['name'], $_POST['description'], $_POST['price']);

			break;	
		default:
			# code...
			break;
	}
?>