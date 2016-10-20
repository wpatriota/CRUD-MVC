function addProduct(id, name, description, price){	
	var dados = new Object();

	dados.action = "addProduct";
	
	dados.id = id;
	dados.name = name;
	dados.description = description;
	dados.price = price;

	$.ajax({
		type: "POST",
		url: "../mvc/lib/actionAjax.php",
		data: dados,
		async: false,
		cache: false,
		success: function(data){			
			BootstrapDialog.alert('Adicionado com sucesso', function(){
	            location.reload();
	        });
		}
	});
}

function delProduct(id){
	var dados = new Object();

	dados.action = "delProduct";
	
	dados.id = id;

	BootstrapDialog.confirm('Tem certeza de que deseja excluir?', function(result){
        if(result) {
            $.ajax({
				type: "POST",
				url: "../mvc/lib/actionAjax.php",
				data: dados,
				async: false,
				cache: false,
				success: function(data){					
					BootstrapDialog.alert('Excluído com sucesso', function(){
			            location.reload();
			        });
				}
			});
        }
    });

	
}

function editProduct(id, name, description, price){
	var dados = new Object();

	dados.action = "editProduct";
	
	dados.id = id;
	dados.name = name;
	dados.description = description;
	dados.price = price;

	$.ajax({
		type: "POST",
		url: "../mvc/lib/actionAjax.php",
		data: dados,
		async: false,
		cache: false,
		success: function(data){			
			BootstrapDialog.alert('Alterado com sucesso', function(){
	            location.reload();
	        });
		}
	});
}