<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
	{
		// $generos=Genre::all();
		$generos=Genre::paginate(5);
		return view('genre', compact('generos'));	 
	}

    	
    public function show($id)
	{
		//aca va estar la relacion de uno a muchos. donde se va a mostrar las peliculas de un solo genero. 
		$generos=Genre::find($id);
		return view('movies', compact('generos'));
	}
	

	public function details($numero)
	{
		$movie=Movie::find($numero);
		// esta es la relacion de muchos a muchos
		//el modelo movie tiene un metodo que se llama actors que tiene muchos actores de esa pelicula, laravel hace el inner join buscando el nombre de las tablas segun las convenciones en singular actor_id y movie_id
		 $actors=$movie->actors()->get();
		 // dd($actors);
		return view('/details', compact('movie', 'actors'));	
	}

}
