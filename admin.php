<?php
	/*
	@author Wellington Patriota de Sousa

	Painel administrativo para os produtos do site
	*/
	require_once "includes/header.html";

	require "controller/productController.php";
	$controller = new ProductController();
	$controller->listProductsAdmin();

	require_once "includes/footer.html";
?>