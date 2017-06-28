<?php
namespace Controllers;

use Models\Partido as Partido;


/**
* 
*/
class PartidoController {

	function get(){
		print_r(Partido::get());
		return true;
	}
	function logIn(){
		foreach ($_POST as $key => $value) {
			print $key .' = '. $value.'<br>';
		}
	}
}




/*echo"<pre>";
print_r($partido->equipo1);*/
/*$pedido = AbsPedido::select('nombre')->where('id','=',2)->get();
//print_r($pedido);
foreach ($pedido as $key) {
	print_r($key->nombre);
}*/
/*$smarty->assign("prueba","Esto es una prueba");
$smarty->display("index.html");*/
/*
$pedido->descripcion = 'Nueva descripción del pedido';
$pedido->save();*/