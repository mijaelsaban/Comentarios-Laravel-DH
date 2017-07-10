<?php

namespace App\Http\Controllers;


use App\Actor;
use App\Movie;
use Illuminate\Http\Request;


class ActorController extends Controller
{
   public function index()
   {
   	$actores = Actor::all();
	// $actor->getNombreCompleto();
	// return view('actor')->with(compact($actores));
	// pasar variables a la vista primero se pasa la variable que espera la vista y despues flecha con la variable que queres pasar, tambien se puede hacer el metodo compact
	// return view('actor', ['actores'=>$actores]);
	return view('actor', compact('actores'));

   }
   public function show($id)
   {
   		$actor=Actor::find($id);
   		$peliculas=Actor::find($id)->movie;
   		echo $peliculas;
   		dd($peliculas);
   		return view('actorMovie', compact('actor'));
   }

}
