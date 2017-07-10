<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<h1>Pelicula</h1>


<?php  // echo $resultado; ?>

<ul>
@forelse ($peliculas as $pelicula )
    <li>{{ $pelicula }}</li>
@empty
    {{'no hay peliculas, amigo'}}
@endforelse
</ul>





  </body>
</html>
