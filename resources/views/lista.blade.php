<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>

<ul>
@foreach ($peliculas as $pelicula)
	<li>{{ $pelicula->id   }} 
	
	<span style="margin-left: 10px;">{{ $pelicula->titulo  }}</span></li>
	<br>
@endforeach
</ul>
  </body>
</html>