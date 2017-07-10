<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>
<h1>RentaMovie :)</h1>



<h2>{{$generos->name}}</h2>


	{{-- aca esta la relacion de uno a muchos. donde generos viene del modelo Genre que ese modelo tiene un metodo llamado movies --}}
@foreach ($generos->movies as $movie)

	<h4><a href="/movie/{{$movie->id}}"> {{$movie->title}}  </a>

  </h4>

@endforeach


	

  </body>
</html>