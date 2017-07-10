<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class ValidarController extends Controller
{
    

    public function registrarPelicula(){

    	return view('clase4');
    }

	public function validacion(Request $request)
	{
	    $this->validate($request, 
	    	[
	    	'titulo'=>'required',
	    	'rating'=>'required',
			'premios'=>'required',
			'duracion'=>'required'
	    	],
	    	[
	    	'required'=>'el campo :attribute es obligatorio'
	    	]

	    	);
	    $input= $request->all();
	 
	    $movie=Movie::create([
	    	'title'=>$request->input('titulo'), 
	    	'rating'=>$request->input('rating'),
	    	'awards'=>$request->input('premios'),
	    	'length'=>$request->input('duracion'),
	    	'release_date'=>'2012-05-04 00:00:00'
	    	

	    	]);
	    echo "exito";

	    //return view('clase4');
	}
	public function update(Request $request)
	{
		$movie=Movie::find($request->input('id'));
		$genre=$request->input('genre');
		$movie->genre_id=$genre;
		$movie->save();
		echo "exito";

	}


}
