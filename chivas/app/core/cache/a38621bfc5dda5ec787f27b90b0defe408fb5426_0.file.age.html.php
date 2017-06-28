<?php
/* Smarty version 3.1.30, created on 2017-06-06 22:04:46
  from "C:\xampp7\htdocs\eloquent\core\themes\theme-v1\views\age.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5937896ee52b45_57207981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a38621bfc5dda5ec787f27b90b0defe408fb5426' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\eloquent\\core\\themes\\theme-v1\\views\\age.html',
      1 => 1496811885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5937896ee52b45_57207981 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-CO"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-CO"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-CO"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Chivas Home Party</title>
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/chivas-home-party.min.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic" rel="stylesheet" type="text/css"><!--[if lt IE]>
  <?php echo '<script'; ?>
 src="//html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <?php echo '<script'; ?>
 src="js/libs/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
</head>
<body class="bg-age-gate">
  <!--Menu-->
  <?php echo $_smarty_tpl->tpl_vars['regiones']->value['menu']['html'];?>

  <!--/-Menu-->
  <!-- Header -->
  <?php echo $_smarty_tpl->tpl_vars['regiones']->value['header']['html'];?>

  <!-- /Header -->
  <!-- content -->
  <?php echo $_smarty_tpl->tpl_vars['regiones']->value['content']['html'];?>

  <!-- /content -->
  <!--Footer-->
  
  <?php echo $_smarty_tpl->tpl_vars['regiones']->value['footer']['html'];?>

  <!--/-Footer-->
  <!--Scripts-->
  <?php echo '<script'; ?>
 src="theme-v1/js/libs.chivas-home-party.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="theme-v1/js/home-party.js"><?php echo '</script'; ?>
>
</body></html><?php }
}
