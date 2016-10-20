<?php
	/*
	@author Wellington Patriota de Sousa

	Index do site - Home com lista de produtos 
	*/
	require_once "includes/header.html";

	require "controller/productController.php";
	$controller = new ProductController();
	$controller->listProducts();

	require_once "includes/footer.html";
?>
