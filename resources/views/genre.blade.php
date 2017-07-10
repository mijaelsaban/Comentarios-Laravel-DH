<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
	<h1>Generos</h1>

	<p> 
		@foreach ($generos as $genero)
			<p><a href="genre/{{$genero->id}}">{{ $genero->name }}</a></p>
		@endforeach

	  </p>
  {{-- aca va la paginacion --}}
  {{$generos->links()}}
  
  </body>
</html>

{{-- //php artisan storage:link --}}