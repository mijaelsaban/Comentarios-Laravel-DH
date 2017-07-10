<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{

    public function  buscarPeliculaId($id)
    {

        $peliculas = [
             1 => "Toy Story",
             2 => "Buscando a Nemo",
             3 => "Avatar",
             4 => "Star Wars: Episodio V",
             5 => "Up",
             6 => "Mary and Max"
        ];
        $resultado=isset($peliculas[$id])?$peliculas[$id]:'la peli no existe';
        // return $resultado;
        // en el corchete va en el primer parameto la variable en la vista y el segundo es la variable llamada arriba
        return view('peliculas', ['resultado' => $resultado]);
    }

    public function listaPeliculas()
    {
        $peliculas = [
             1 => "Toy Story",
             2 => "Buscando a Nemo",
             3 => "Avatar",
             4 => "Star Wars: Episodio V",
             5 => "Up",
             6 => "Mary and Max"
        ];

        $resultadoPeliculas = isset($peliculas)?$peliculas:'NO HAY PELICULAS';
        return view('peliculas', ['peliculas' => $peliculas]);
    }
    public function agregarPelicula()
    {
        return view('nuevaPelicula');
    }
    public function nuevaPelicula()
    {
        dd($_POST);
        return 'pelicula agregada con exito';
    }
    public function getPeliculas()
    {
        $peliculas= Pelicula::all();
        return view('lista', compact('peliculas'));
    }
    public function getFirst()
    {
        $first=Pelicula::first();
        return view('lista', compact('peliculas'));
    }
}
