<?php  
namespace Models;

//require_once "core/config.php";
use Illuminate\Database\Eloquent\Model;

class Menu extends Model{

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/
	protected $table = 'pg_route';
	public $timestamps = false;
	
	public function regiones(){
    	return Menu::belongsToMany('Models\Region', 'pg_regions_by_sections', 'idRoute', 'idRegion');
    }
}
?>