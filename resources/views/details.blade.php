<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>

<h1>{{ $movie->title }}</h1>

<ul>
	<li>Rating: {{$movie->rating}}</li>
	<li>Premios: {{$movie->awards}}</li>
	<li>Fecha de Estreno: {{$movie->release_date}}</li>
</ul>
<h2>Actores de la pelicula <span style="color:red;"> "{{$movie->title}}" </span></h2>

<ul>

{{-- esta es la relacion de muchos a muchos que viene del controller --}}
@foreach ($actors as $actor)
	<li>{{$actor->getNombreCompleto()}}</li>
@endforeach
	
</ul>




  </body>
</html>