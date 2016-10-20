$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});

function openModalDelProduct(id, name, description, price){
    BootstrapDialog.show({
    	title: 'Editar Produto',
	    message: 'id<input type="text" id="id" class="form-control" disabled/>Produto<input type="text" id="name" class="form-control"/>Descricao<input type="text" id="description" class="form-control"/>Preco:<input type="text" id="price" class="form-control"/>',
	    onshow: function(dialogRef){
	        dialogRef.getModalBody().find('input#id').val(id);	   
	        dialogRef.getModalBody().find('input#name').val(name);	   
	        dialogRef.getModalBody().find('input#description').val(description);	   
	        dialogRef.getModalBody().find('input#price').val(price);	        
	    },
	    buttons: [{
	        label: 'Gravar',
	        action: function(dialogRef) {
	            editProduct(dialogRef.getModalBody().find('input#id').val(),	   
	        	dialogRef.getModalBody().find('input#name').val(),	   
	        	dialogRef.getModalBody().find('input#description').val(),	   
	        	dialogRef.getModalBody().find('input#price').val());
	        }
	    }]
	});
}

function openModalAddProduct(){
    BootstrapDialog.show({
    	title: 'Adicionar Produto',
	    message: 'id<input type="text" id="id" class="form-control"/>Produto<input type="text" id="name" class="form-control"/>Descricao<input type="text" id="description" class="form-control"/>Preco:<input type="text" id="price" class="form-control"/>',	    
	    buttons: [{
	        label: 'Gravar',
	        action: function(dialogRef) {
	            addProduct(dialogRef.getModalBody().find('input#id').val(),	   
	        	dialogRef.getModalBody().find('input#name').val(),	   
	        	dialogRef.getModalBody().find('input#description').val(),	   
	        	dialogRef.getModalBody().find('input#price').val());
	        }
	    }]
	});
}