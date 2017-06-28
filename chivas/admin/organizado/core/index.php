<?php  
require 'config.php';
if(isset($_COOKIE["ywd_fr"]) && isset($_COOKIE["ywd_usu"])){
	$url = $_GET['url'];
	$url = explode("/", $url);
	if($url[0] == "") {
		$r = "home";
	} else {
		$r = $url[0];
	}
	$archivo = $r.".html";
	$class = "Controllers\\UserController";
	$function = "init";
	$idProfileUser = $class::$function();
	// printVar($idProfileUser);

	$smarty->assign("tipoUsuario", $idProfileUser["idProfile"]);
	$smarty->assign("menu", true);
	$smarty->assign("title", $url[0]);
	$smarty->assign("internal",$archivo);
	$smarty->display("index.html");
}else{
	$smarty->assign("menu", false);
	$smarty->assign("title", "login");
	$smarty->assign("internal","login.html");
	$smarty->display("index.html");
}

?>