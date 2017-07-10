<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
	
    public function movies()
    {
    	//un genero tiene muchas peliculas por eso... ahora la clase Genre tiene un metodo llamado movies donde si hacemos Genre::find($id)->movies recibimos la relacion entre ese genero con sus peliculas.
    	return $this->hasMany('App\Movie');
    }
}
