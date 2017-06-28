<?php
/* Smarty version 3.1.30, created on 2017-06-27 13:36:05
  from "C:\xampp\htdocs\pernod\deeploy_pernod\admin\organizado\core\theme\views\country.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952c1b50ffb21_87412132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '403da533a0a37a0685d6e63d186caa08c60132cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pernod\\deeploy_pernod\\admin\\organizado\\core\\theme\\views\\country.html',
      1 => 1498595285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952c1b50ffb21_87412132 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Country</a></li>
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
								<th>Abreviacion</th>
								<th>Nombre</th>
								<th>Edad minima</th>
								<th>lenguaje</th>
								<th>Tipo de moneda</th>
								<th>Zona horaria</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody id="countries">
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
			"action" : "getAllCountry"
		};
		var result = ajaxGenerico(ajaxData);
		dataCountry = result["data"];
		var l = dataCountry.length;
		var contenido = "";
		for(var i = 0; i < l; i++) {
			contenido += '<tr>';
			contenido += '<td>' + dataCountry[i].countryId + '</td>';
			contenido += '<td>' + dataCountry[i].abbreviation + '</td>';
			contenido += '<td>' + dataCountry[i].countryName + '</td>';
			contenido += '<td>' + dataCountry[i].minAge + '</td>';
			contenido += '<td>' + dataCountry[i].languageName + '</td>';
			contenido += '<td>' + dataCountry[i].type + '</td>';
			contenido += '<td>' + dataCountry[i].gmtZone + '</td>';
			contenido += '<td><a onclick="verCiudades(' + dataCountry[i].countryId + ');" class="btn btn-success"> <span><i class="fa fa-clock-o"></i></span> Ver Ciudades </a></td>';
			contenido += '</tr>';
		}
		jQuery("#countries").html(contenido);
	});
	function verCiudades(id) {
		console.log(id);
		localStorage.setItem("dCntr", id);
		window.location = "city";
	}
	
<?php echo '</script'; ?>
><?php }
}
