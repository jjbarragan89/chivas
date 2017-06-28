<?php 
 namespace Models;

 use Illuminate\Database\Eloquent\Model; 

 class User extends Model{ 
	 protected $table='pg_admin_user';
	 public $timestamps=false; 
 }

?>