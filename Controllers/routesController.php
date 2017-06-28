<?php 
namespace Controllers;

//use Illuminate\Database\Capsule\Manager as Capsule;
//use \Illuminate\Support\Facades\Facade as Facade;
//use \Illuminate\Container\Container as Container;

//use Illuminate\Support\Facades\DB;
use Models\Menu as menu;
use Models\Region as region;
use Models\RegionsBySection as regionsBySections;

//$app = new Container();
//$app->singleton('app', 'Illuminate\Container\Container');
//Facade::setFacadeApplication($app);

class RoutesController {

	function getAllRoutes() {
		$routes=array();
		$menus = menu::where('state', 'E')
				//->orderBy('name', 'desc')
				//->take(10)
				->get();
		if(count($menus)>0){
			foreach ($menus as $menu) {
				$temp=[];
				foreach ($menu['attributes'] as $key => $value) {
					$temp[$key]=$value;
				}
				array_push($routes, $temp);
			}
		}
		$ret = (count($routes)>0 )? $routes: false;
		return $ret;
	}

	function getAllRoutesSingleWhere($colum,$condition,$value){
		$routes=array();
		$menus = menu::where($colum, $condition,$value)
				//->orderBy('name', 'desc')
				//->take(10)
				->get();
		if(count($menus)>0){
			foreach ($menus as $menu) {
				$temp=[];
				foreach ($menu['attributes'] as $key => $value) {
					$temp[$key]=$value;
				}
				array_push($routes, $temp);
			}
		}
		$ret = (count($routes)>0 )? $routes: false;
		return $ret;
	}

	function getAllRoutesMultipleWhere($options) {
		$routes=array();
		$menus = menu::where($options)
				//->orderBy('name', 'desc')
				//->take(10)
				->get();
		if(count($menus)>0){
			foreach ($menus as $menu) {
				$temp=[];
				foreach ($menu['attributes'] as $key => $value) {
					$temp[$key]=$value;
				}
				array_push($routes, $temp);
			}
		}
		$ret = (count($routes)>0 )? $routes: false;
		return $ret;
	}

	function getAllRegionsBySectionId($idRoute){
		
		//return menu::find($idMenu)->regiones()->select('pg_regions_by_sections.*','pg_region.*')->get();
		//return menu::find(1)->regiones()->select('pg_regions_by_sections.id as idBy', 'pg_menu.*')->get();
		$regions = regionsBySections::join('pg_region', 'pg_regions_by_sections.idRegion', '=', 'pg_region.id')
			->join('pg_route','pg_regions_by_sections.idRoute', '=', 'pg_route.id')
			->select('pg_regions_by_sections.*','pg_region.*')
			->where('idRoute','=',$idRoute)
			->get();
			//echo '<pre>';
			//print_r($regions);
			//die();
			return $regions;
		/*$regions=array();
		$results = regionsBySections::where($options)
			   //->orderBy('name', 'desc')
			   //->take(10)
			   ->get();
		if(count($results)>0){
			foreach ($results as $result) {
				$temp=[];
				foreach ($result['attributes'] as $key => $value) {
					$temp[$key]=$value;
				}
				array_push($regions, $temp);
			}
		}
		$ret = (count($regions)>0 )? $regions: false;
		return $ret;*/
	}

	function ageRate(){

		$routes = RoutesController::getAllRoutesMultipleWhere([ ['state','=','E'],['sectionName','=','ageRate']]);
		if($routes){
			$idRoute=$routes[0]['id'];
			//get all regions by section id
			$regions=RoutesController::getAllRegionsBySectionId($idRoute);
			$regiones='';
			foreach ($regions as $region) {
					$html = $region['html'];
					$html = str_replace('{#$theme#}', THEME, $html);
					$region['html']=$html;
				switch ($region['attributes']['regionName']) {

					case 'header':
						$regiones['header']=$region;
					break;
					case 'menu':
						$regiones['menu']=$region;
					break;
					case 'footer':
						$regiones['footer']=$region;
					break;
					case 'content':
						$regiones['content']=$region;
					break;
			}
			
		}
		/*echo '<pre>';
		print_r($regiones);
		echo '</pre>';
		die();*/
		$theme=THEME;

		smarty()->assign('regiones',$regiones);
		smarty()->assign('theme',$theme);
		smarty()->display('age.html');
		}else{
			smarty()->display('404.html');
			
		}
	}
	function test(){
		echo"Entroooooooo";
		//smarty()->display('404.html');
	}
}

?>