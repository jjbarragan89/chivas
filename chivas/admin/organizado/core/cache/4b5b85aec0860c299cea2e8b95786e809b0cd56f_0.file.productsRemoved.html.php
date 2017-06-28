<?php
/* Smarty version 3.1.30, created on 2017-06-27 09:09:46
  from "C:\xampp\htdocs\pernod\deeploy_pernod\admin\organizado\core\theme\views\productsRemoved.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952834a65b131_63727696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b5b85aec0860c299cea2e8b95786e809b0cd56f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pernod\\deeploy_pernod\\admin\\organizado\\core\\theme\\views\\productsRemoved.html',
      1 => 1498579750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952834a65b131_63727696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Removed products</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-content">
				<div class="clearfix"></div>
				<div class="col-xs-12">
					<br/>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>id</th>
								<th>name</th>
								<th>description</th>
								<th>price</th>
								<th>image</th>
							</tr>
						</thead>
						<tbody id="products">
						</tbody>
					</table>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var dataProduct;
	jQuery(document).ready(function(){
		var ajaxData = new Object();
		ajaxData.url = "modules/products.php";
		ajaxData.variables = {
			"action" : "getAllProductRemoved"
		};
		var result = ajaxGenerico(ajaxData);
		dataProduct = result["data"];
		var l = dataProduct.length;
		var contenido = "";
		for(var i = 0; i < l; i++) {
			contenido += '<tr>';
			contenido += '<td>' + dataProduct[i].id + '</td>';
			contenido += '<td>' + dataProduct[i].nombre + '</td>';
			contenido += '<td>' + dataProduct[i].description + '</td>';
			contenido += '<td>' + dataProduct[i].price + '</td>';
			contenido += '<td>' + dataProduct[i].image + '</td>';
			contenido += '<td><a onclick="restore(' + dataProduct[i].id + ');" class="btn btn-success"> <span><i class="fa fa-clock-o"></i></span> Restaurar </a></td>';
			contenido += '</tr>';
		}
		jQuery("#products").html(contenido);
	});
	function restore(id) {		
		var ajaxData = new Object();
		ajaxData.url = "modules/products.php";
		ajaxData.variables = {
			"action" : "restoreProduct",
			"d" : id
		};
		var result = ajaxGenerico(ajaxData);
		if(result["error"] != 0 && result["data"] != 0) {
			alert("El producto se restauro correctamente");
			location.reload();
		} else {
			alert("Lo sentimos, hubo un error al restaurar el producto");
		}
	}
<?php echo '</script'; ?>
><?php }
}
