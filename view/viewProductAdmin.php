<?php
	/*
	@author Wellington Patriota de Sousa

	Classe que monta o CRUD de produtos na tela seguindo os templates HTML
	*/
	class viewProductAdmin{
		public function render($list){
			$itens = '';									
			foreach ($list as $product) {
				$templateProductItem = file_get_contents(dirname(__FILE__)."\\templateProductsAdminItem.html");
				
				$templateProductItem  = str_replace("{*productId}", $product->getId(), $templateProductItem);
				$templateProductItem  = str_replace("{*productName}", $product->getName(), $templateProductItem);
				$templateProductItem  = str_replace("{*productDescription}", $product->getDescription(), $templateProductItem);
				$templateProductItem  = str_replace("{*productPrice}", $product->getPrice(), $templateProductItem);

				$itens .= $templateProductItem;
			}

			$templateProducts = file_get_contents(dirname(__FILE__)."\\templateProductsAdmin.html");
			$templateProducts = str_replace("{*itens}", $itens, $templateProducts);		
			
			echo $templateProducts;			
		}
	}
?>