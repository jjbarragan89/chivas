<?php
/* Smarty version 3.1.30, created on 2017-06-27 07:50:15
  from "C:\xampp\htdocs\pernod\deeploy_pernod\admin\organizado\views\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595270a7e4ae38_93137938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e675838bd94366c06828dd72dc7fa4cf32d194a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pernod\\deeploy_pernod\\admin\\organizado\\views\\index.html',
      1 => 1498575012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menuSuperAdmin.html' => 1,
    'file:menuUserAdmin.html' => 1,
    'file:menuPagesAdmin.html' => 1,
  ),
),false)) {
function content_595270a7e4ae38_93137938 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['menu']->value == true) {?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DevOOPS v2</title>
		<link rel="stylesheet" type="text/css" href="theme/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="theme/css/libs/jquery-ui.min.css">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="theme/css/style_v1.css">
		<?php echo '<script'; ?>
 src="theme/js/libs/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="theme/js/libs/jquery-ui.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="theme/js/libs/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="theme/js/devoops.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="theme/js/functions.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<!--Start Header-->
		<div id="screensaver">
			<canvas id="canvas"></canvas>
			<i class="fa fa-lock" id="screen_unlock"></i>
		</div>
		<div id="modalbox">
			<div class="devoops-modal">
				<div class="devoops-modal-header">
					<div class="modal-header-name">
						<span>Basic table</span>
					</div>
					<div class="box-icons">
						<a class="close-link">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="devoops-modal-inner">
				</div>
				<div class="devoops-modal-bottom">
				</div>
			</div>
		</div>
		<header class="navbar">
			<div class="container-fluid expanded-panel">
				<div class="row">
					<div id="logo" class="col-xs-12 col-sm-2">
						<a href="">Pernod</a>
					</div>
					<div id="top-panel" class="col-xs-12 col-sm-10">
						<div class="row">
							<div class="col-xs-8 col-sm-4">
							</div>
							<div class="col-xs-4 col-sm-8 top-panel-right">
								<ul class="nav navbar-nav pull-right panel-menu">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
											<div class="avatar">
												<img src="theme/images/avatar.jpg" class="img-circle" alt="avatar" />
											</div>
											<i class="fa fa-angle-down pull-right"></i>
											<div class="user-mini pull-right">
												<span class="welcome">Welcome,</span>
												<span>Jane Devoops</span>
											</div>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="#">
													<i class="fa fa-user"></i>
													<span>Profile</span>
												</a>
											</li>
											<li>
												<a href="ajax/page_messages.html" class="ajax-link">
													<i class="fa fa-envelope"></i>
													<span>Messages</span>
												</a>
											</li>
											<li>
												<a href="ajax/gallery_simple.html" class="ajax-link">
													<i class="fa fa-picture-o"></i>
													<span>Albums</span>
												</a>
											</li>
											<li>
												<a href="ajax/calendar.html" class="ajax-link">
													<i class="fa fa-tasks"></i>
													<span>Tasks</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-cog"></i>
													<span>Settings</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-power-off"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--End Header-->
		<!--Start Container-->
		<div id="main" class="container-fluid">
			<div class="row">
				<div id="sidebar-left" class="col-xs-2 col-sm-2">
					<?php if ($_smarty_tpl->tpl_vars['tipoUsuario']->value == 1) {?>
						<?php $_smarty_tpl->_subTemplateRender("file:menuSuperAdmin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['tipoUsuario']->value == 2) {?>
						<?php $_smarty_tpl->_subTemplateRender("file:menuUserAdmin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php } else { ?>
						<?php $_smarty_tpl->_subTemplateRender("file:menuPagesAdmin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php }?>
				</div>
				<!--Start Content-->
				<div id="content" class="col-xs-12 col-sm-10">
					<div id="about">
						<div class="about-inner">
							<h4 class="page-header">Open-source admin theme for you</h4>
							<p>DevOOPS team</p>
							<p>Homepage - <a href="http://devoops.me" target="_blank">http://devoops.me</a></p>
							<p>Email - <a href="mailto:devoopsme@gmail.com">devoopsme@gmail.com</a></p>
							<p>Twitter - <a href="http://twitter.com/devoopsme" target="_blank">http://twitter.com/devoopsme</a></p>
							<p>Donate - BTC 123Ci1ZFK5V7gyLsyVU36yPNWSB5TDqKn3</p>
						</div>
					</div>
					<div class="preloader">
						<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['internal']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					</div>
					<div id="ajax-content"></div>
				</div>
				<!--End Content-->
			</div>
		</div>
	</body>
</html>
<?php } else { ?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['internal']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }
}
}
