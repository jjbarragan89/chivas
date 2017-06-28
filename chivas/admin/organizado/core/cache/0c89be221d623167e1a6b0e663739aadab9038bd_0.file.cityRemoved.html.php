<?php
/* Smarty version 3.1.30, created on 2017-06-27 14:15:09
  from "C:\xampp\htdocs\pernod\deeploy_pernod\admin\organizado\core\theme\views\cityRemoved.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952cadda00c98_16082760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c89be221d623167e1a6b0e663739aadab9038bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pernod\\deeploy_pernod\\admin\\organizado\\core\\theme\\views\\cityRemoved.html',
      1 => 1498598106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952cadda00c98_16082760 (Smarty_Internal_Template $_smarty_tpl) {
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
								<th>Ciudad</th>
								<th>Pais</th>
								<th>capacidad maxima</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody id="citiesRemoved">
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
		var ajaxData = new Object();
		ajaxData.url = "modules/countryAndCity.php";
		ajaxData.variables = {
			"action" : "getAllCitiesRemoved"
		};
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
			contenido += '<td><a onclick="restore(' + dataCountry[i].id + ');" class="btn btn-success"> <span><i class="fa fa-clock-o"></i></span> Restaurar </a></td>';
			contenido += '</tr>';
		}
		jQuery("#citiesRemoved").html(contenido);
	});
	function restore(id) {		
		var ajaxData = new Object();
		ajaxData.url = "modules/countryAndCity.php";
		ajaxData.variables = {
			"action" : "restoreCity",
			"d" : id
		};
		var result = ajaxGenerico(ajaxData);
		if(result["error"] != 0 && result["data"] != 0) {
			alert("La ciudad se restauro correctamente");
			location.reload();
		} else {
			alert("Lo sentimos, hubo un error al restaurar la ciudad");
		}
	}
<?php echo '</script'; ?>
><?php }
}
