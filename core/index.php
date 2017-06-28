<?php  
ini_set('display_errors','1');

require '/core/config.php';
Controllers\RoutesController::test();
die;
$url=$_GET['url'];
$url = explode("/", $url);
$class = "Controllers\\".$url[0];
$function = $url[1];
if(isset($_COOKIE['ageRate']) ){
	if (class_exists($class) && method_exists($class,$function)) {
		$class::$function();
	}else{
		echo 'enviar a la interna de home';
		//$smarty->display('index.html');
	}
}else{
	/*echo '<pre>';
	print_r(get_declared_classes());die();*/
	$class = "Controllers\\RoutesController";
	//$function = 'ageRate';
	$function = 'test';
	$class::$function();

	/*$class = "Controllers\\countryController";
	$function = 'getAllCountries';
	$function = 'fullDataCountry';
	$function = 'fullDataCountryByCountryId';
	$r=$class::$function(1);
	printVar($r[0]['attributes']);*/
}

?>