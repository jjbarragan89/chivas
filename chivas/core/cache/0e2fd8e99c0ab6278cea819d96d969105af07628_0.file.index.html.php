<?php
/* Smarty version 3.1.30, created on 2017-06-05 15:09:32
  from "C:\xampp7\htdocs\eloquent\views\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5935d69ca54006_22176192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e2fd8e99c0ab6278cea819d96d969105af07628' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\eloquent\\views\\index.html',
      1 => 1495843322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5935d69ca54006_22176192 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<head>
	<title>Index</title>
</head>
<body>
	Este es el admin de instancias

	<br>	
	<form id="agerate" action="PartidoController/logIn" method="post">
		<input type="text" name="user" id="" placeholder="Usuario"><br>
		<input type="text" name="pass" id="" placeholder="Password"><br>
		<button type="submit" id="">Ir</button>
	</form>
</body>
</html><?php }
}
