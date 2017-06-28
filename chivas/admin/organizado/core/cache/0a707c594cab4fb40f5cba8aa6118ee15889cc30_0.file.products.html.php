<?php
/* Smarty version 3.1.30, created on 2017-06-27 09:10:23
  from "C:\xampp\htdocs\pernod\deeploy_pernod\admin\organizado\core\theme\views\products.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952836f18cfd1_58561101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a707c594cab4fb40f5cba8aa6118ee15889cc30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pernod\\deeploy_pernod\\admin\\organizado\\core\\theme\\views\\products.html',
      1 => 1498579818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952836f18cfd1_58561101 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="home">home</a></li>
			<li><a href="#">products</a></li>
		</ol>
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>
<div class="row" id="editProduct" style="display:none;margin-bottom: 40px;">
	<form method="post" name="editarProducto">
		<div class="col-sm-3">
			<label for="name">Nombre Producto</label>
			<input type="text" id="name" name="name" class="form-control" placeholder="Nombre del producto">
		</div>
		<div class="col-sm-3">
			<label for="description">Descripcion</label>
			<input type="text" id="description" name="description" class="form-control" placeholder="Descripcion">
		</div>
		<div class="col-sm-3">
			<label for="price">Precio</label>
			<input type="text" id="price" name="price" class="form-control" placeholder="Precio">
		</div>
		<div class="col-sm-3">
			<label for="image">Imagen</label>
			<input type="text" id="image" name="image" class="form-control" placeholder="Imagen">
		</div>
		<div class="col-sm-2">
			<a onclick="saveEdit();" class="btn btn-primary">
				<span><i class="fa fa-clock-o"></i></span>
				Guardar
			</a>
		</div>
	</form>
</div>
<div class="row" id="products">
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="theme/js/functions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var dataProduct;
	jQuery(document).ready(function(){
		var ajaxData = new Object();
		ajaxData.url = "modules/products.php";
		ajaxData.variables = {
			"action" : "getAllProduct"
		};
		var result = ajaxGenerico(ajaxData);
		dataProduct = result["data"];
		var long = dataProduct.length;
		var contenido = "";
		for(var i = 0; i < long; i++){
			contenido += '<div class="col-xs-12 col-sm-3">';
			contenido += '<div class="box box-pricing">';
			contenido += '<div class="thumbnail">';
			contenido += '<img src="theme/images/' + dataProduct[i].image + '" alt="">';
			contenido += '<div class="caption">';
			contenido += '<h5 class="text-center">' + dataProduct[i].nombre + '</h5>';
			contenido += '<p>' + dataProduct[i].description + '</p>';
			contenido += '<a onclick="edit(' + dataProduct[i].id + ');" class="btn btn btn-default">Edit product</a>';
			contenido += '<a onclick="erase(' + dataProduct[i].id + ');" class="btn btn-danger">Delete</a>';
			contenido += '</div>';
			contenido += '</div>';
			contenido += '</div>';
			contenido += '</div>';
		}
		jQuery("#products").html(contenido);
		
	});
	function edit(id) {
		jQuery("#editProduct").show();
		animar("#editProduct");
		localStorage.setItem("d", id);
		var long = dataProduct.length;
		for(var i = 0; i < long; i++){
			if(dataProduct[i].id == id){
				jQuery("#name").val(dataProduct[i].nombre);
				jQuery("#description").val(dataProduct[i].description);
				jQuery("#price").val(dataProduct[i].price);
				jQuery("#image").val(dataProduct[i].image);
				break;
			}
		}
	}
	function saveEdit(){
		var ajaxData = new Object();
		ajaxData.url = "modules/products.php";
		ajaxData.variables = {
			"action" : "saveEditProduct",
			"d" : localStorage.getItem("d"),
			"nm": jQuery("#name").val(),
			"dscrptn": jQuery("#description").val(),
			"prc": jQuery("#price").val(),
			"mg": jQuery("#image").val()
		};
		localStorage.removeItem("d");
		var result = ajaxGenerico(ajaxData);
		if(result["error"] != 0 && result["data"] != 0) {
			alert("El producto se ha actualizado correctamente");
			location.reload();
		} else {
			alert("Lo sentimos, hubo un error en la eliminacion del producto");
		}
	}
	function erase(id) {
		var ajaxData = new Object();
		ajaxData.url = "modules/products.php";
		ajaxData.variables = {
			"action" : "deleteProduct",
			"ipd": id
		};
		var result = ajaxGenerico(ajaxData);
		if(result["error"] != 0 && result["data"] != 0) {
			alert("El producto se ha eliminado correctamente");
			location.reload();
		} else {
			alert("Lo sentimos, hubo un error en la eliminacion del producto");
		}
	}
<?php echo '</script'; ?>
><?php }
}