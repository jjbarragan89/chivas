<?php
/* Smarty version 3.1.30, created on 2017-06-27 14:04:10
  from "C:\xampp\htdocs\pernod\deeploy_pernod\admin\organizado\core\theme\views\city.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952c84ac115c2_02637043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '583fde32a41b7f59d418904042ff4f743c73657b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pernod\\deeploy_pernod\\admin\\organizado\\core\\theme\\views\\city.html',
      1 => 1498597447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952c84ac115c2_02637043 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">city</a></li>
		</ol>
	</div>
</div>
<div class="row" id="editCity" style="display:none;margin-bottom: 40px;">
	<form method="post" name="editarProducto">
		<div class="col-sm-3">
			<label for="name">Nombre ciudad</label>
			<input type="text" id="name" name="name" class="form-control" placeholder="Nombre del producto">
		</div>
		<div class="col-sm-3">
			<label for="maxCapacity">Capacidad Maxima</label>
			<input type="text" id="maxCapacity" name="maxCapacity" class="form-control" placeholder="Descripcion">
		</div>
		<div class="col-sm-2">
			<a onclick="saveEdit();" class="btn btn-primary">
				<span><i class="fa fa-clock-o"></i></span>
				Guardar
			</a>
		</div>
	</form>
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
								<th>Ciudad</th>
								<th>Pais</th>
								<th>capacidad maxima</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody id="cities">
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
	var dataCountry;
	jQuery(document).ready(function(){
		var country = "";
		country = localStorage.getItem("dCntr");
		var ajaxData = new Object();
		ajaxData.url = "modules/countryAndCity.php";
		if(country != "" && country != null && country != undefined){
			ajaxData.variables = {
				"action" : "getAllCityCountry",
				"dCntr" : country
			};
			localStorage.removeItem("dCntr");
		} else {
			ajaxData.variables = {
				"action" : "getAllCity"
			};
		}
		var result = ajaxGenerico(ajaxData);
		dataCountry = result["data"];
		var l = dataCountry.length;
		var contenido = "";
		for(var i = 0; i < l; i++) {
			contenido += '<tr>';
			contenido += '<td>' + dataCountry[i].cityId + '</td>';
			contenido += '<td>' + dataCountry[i].cityName + '</td>';
			contenido += '<td>' + dataCountry[i].countryName + '</td>';
			contenido += '<td>' + dataCountry[i].maxCapacity + '</td>';
			contenido += '<td><a onclick="edit(' + dataCountry[i].cityId + ');" class="btn btn btn-default">Edit product</a></td>';
			contenido += '<td><a onclick="erase(' + dataCountry[i].cityId + ');" class="btn btn-danger">Delete</a></td>';
			contenido += '</tr>';
		}
		jQuery("#cities").html(contenido);
	});
	function edit(id) {
		jQuery("#editCity").show();
		animar("#editCity");
		localStorage.setItem("d", id);
		var long = dataCountry.length;
		for(var i = 0; i < long; i++){
			if(dataCountry[i].id == id){
				jQuery("#name").val(dataCountry[i].cityName);
				jQuery("#maxCapacity").val(dataCountry[i].maxCapacity);
				break;
			}
		}
	}
	function saveEdit(){
		var ajaxData = new Object();
		ajaxData.url = "modules/countryAndCity.php";
		ajaxData.variables = {
			"action" : "saveEditCity",
			"d" : localStorage.getItem("d"),
			"nm": jQuery("#name").val(),
			"mxCpct": jQuery("#maxCapacity").val(),
		};
		localStorage.removeItem("d");
		var result = ajaxGenerico(ajaxData);
		if(result["error"] != 0 && result["data"] != 0) {
			alert("La ciudad se ha actualizado correctamente");
			location.reload();
		} else {
			alert("Lo sentimos, hubo un error en la actualizacion de la ciudad");
		}
	}
	function erase(idCity) {
		var ajaxData = new Object();
		ajaxData.url = "modules/countryAndCity.php";
		ajaxData.variables = {
			"action" : "eraseCity",
			"dCt" : idCity
		};
		var result = ajaxGenerico(ajaxData);
		if(result["error"] != 0 && result["data"] != 0) {
			alert("La ciuda se ha eliminado correctamente");
			location.reload();
		} else {
			alert("Lo sentimos, hubo un error en la eliminacion de la ciudad");
		}
	}
<?php echo '</script'; ?>
><?php }
}
