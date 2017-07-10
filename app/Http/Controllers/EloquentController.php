<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Pelicula;

class EloquentController extends Controller
{
    public function ejemplo()
    {
    	$pelicula = Pelicula::where('titulo', 'Toy Story')->get();
    	dd($peliculas->titulo);
    }
}
