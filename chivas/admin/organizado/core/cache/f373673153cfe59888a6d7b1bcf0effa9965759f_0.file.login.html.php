<?php
/* Smarty version 3.1.30, created on 2017-06-27 06:03:38
  from "C:\xampp\htdocs\pernod\deeploy_pernod\admin\organizado\core\theme\views\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595257aa5218b2_86234217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f373673153cfe59888a6d7b1bcf0effa9965759f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pernod\\deeploy_pernod\\admin\\organizado\\core\\theme\\views\\login.html',
      1 => 1498149234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595257aa5218b2_86234217 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
	<head>
		<title>Administrador Pernod - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel="stylesheet" type="text/css" href="theme/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Righteous'>
		<link rel="stylesheet" type="text/css" href="theme/css/style_v1.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="theme/js/libs/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="theme/js/functions.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="theme/js/login.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<header>
		</header>
		<div id="main" class="container-fluid">
			<div class="container-fluid">
				<div id="page-login" class="row">
					<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="box">
							<form method="post" name="form" id="form">
								<div class="box-content">
									<div class="text-center">
										<h3 class="page-header">Pernod</h3>
									</div>
									<div class="form-group">
										<label class="control-label">email</label>
										<input type="text" class="form-control" name="username" id="username" />
									</div>
									<div class="form-group">
										<label class="control-label">Password</label>
										<input type="password" class="form-control" name="password" id="password" />
									</div>
									<div class="text-center">
										<a href="#" id="signIn" class="btn btn-primary">Sign in</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
		</footer>
	</body>
</html><?php }
}
