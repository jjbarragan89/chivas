<?php 
 namespace Models;

 use Illuminate\Database\Eloquent\Model; 

 class Log extends Model{ 
	 protected $table='pg_admin_log';
	 public $timestamps=false; 
 }

?>