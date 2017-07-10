<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // para sobreescirbir el nombre de una columna porque espera el standar en ingles en plural
    // protected $table = 'pelicula';

    // public $timestamps = false;
    //created_at
    //update_at

    //solo podes agregar estos campos
    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date'];


    //podes agregar todo menos esto...
    protected $guarded= ['id'];
//-------------------------
    //relaciones
    //parametros
    //
    //la convencion del nombre para hacer los inner join es que el foreign key se llama: genre_id
   	public function genre()
   	{
   		return	$this->belongsTo('App\Genre');
   	}
   	public function actors()
   	{
   		return	$this->belongsToMany('App\Actor');
   	}
    
}
