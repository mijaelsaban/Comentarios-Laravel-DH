<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
	//por defecto laravel le agrega una 's' al nombre del modelo para buscar el nombre de la tabla se cambia con la siguiente linea
	// protected $table = 'actor';
	public $timestamps =false;
    public function getNombreCompleto()
    {	
    	return $this->first_name . ' ' . $this->last_name;
    }
    public function movies()
    {
    	return $this->belongsToMany('App\Movie');
    }
}



