<?php
/* Smarty version 3.1.30, created on 2017-06-27 14:14:13
  from "C:\xampp\htdocs\pernod\deeploy_pernod\admin\organizado\core\theme\views\menuUserAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952caa5b731b0_15205537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a414478218c0b0881156266e9f902c8c72c7785' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pernod\\deeploy_pernod\\admin\\organizado\\core\\theme\\views\\menuUserAdmin.html',
      1 => 1498598052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952caa5b731b0_15205537 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav main-menu">
	<li class="dropdown">
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-table"></i>
			 <span class="hidden-xs">Paises y ciudades</span>
		</a>
		<ul class="dropdown-menu">
			<li><a href="country">Lista de paises</a></li>
			<li><a href="city">Lista de Ciudades</a></li>
			<li><a href="cityRemoved">Ciudades eliminadas</a></li>
		</ul>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-map-marker"></i>
			<span class="hidden-xs">Ubicaciones</span>
		</a>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-bar-chart-o"></i>
			<span class="hidden-xs">Capacidad por ciudad</span>
		</a>
	</li>
	
	<li class="dropdown">
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-pencil-square-o"></i>
			 <span class="hidden-xs">Numero de invitados</span>
		</a>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-list"></i>
			 <span class="hidden-xs">Productos</span>
		</a>
		<ul class="dropdown-menu">
			<li><a href="products">Lista de productos</a></li>
			<li><a href="productsRemoved">Productos eliminados</a></li>
		</ul>
	</li>	
</ul><?php }
}
