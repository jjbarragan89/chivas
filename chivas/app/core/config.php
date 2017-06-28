<?php
require 'smarty/libs/Smarty.class.php';

require '../core/vendor/autoload.php'; //bluemix infraestructure
//require '../vendor/autoload.php'; //localhost

define('THEME', 'themes/theme-v1');

/* Timezone */

date_default_timezone_set('America/Los_Angeles');

/* Database */

//Importamos el archivo autoload.php presente en nuestro directorio vendor require 'vendor/autoload.php';
//Después importamos la clase Capsule escribiendo su ruta completa incluyendo el namespace
use Illuminate\Database\Capsule\Manager as Capsule;
//Creamos un nuevo objeto de tipo Capsule
$capsule = new Capsule;
//Indicamos en el siguiente array los datos de configuración de la BD
$capsule->addConnection([
 'driver' =>'mysql',
 'host' => '127.0.0.1',
 'database' => 'mydb',
 'username' => 'root',
 'password' => '1nt3r4ct1v3',
 'charset' => 'utf8',
 'collation' => 'utf8_unicode_ci',
 'prefix' => '',
]);
 
//Y finalmente, iniciamos Eloquent
$capsule->bootEloquent();


/* Smart Views */

$smarty = new Smarty();
$smarty->compile_check = true;
$smarty->left_delimiter = '{#';
$smarty->right_delimiter = '#}';
$smarty->setTemplateDir(array('../views',THEME.'/views'))
	   ->setCompileDir('cache');

function smarty() {
    global $smarty;
    return $smarty;
}

/*Event::listen('illuminate.query',function($query){
    var_dump($query);
});*/

function printVar($d){
	echo '<pre style="width:100%;background:black;color:green;border:dashed 1px;">';
	print_r($d);
	echo '<pre>';
}