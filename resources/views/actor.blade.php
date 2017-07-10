<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>
<h1 style="background-color: lightblue; text-align: center;">Lista de Actores</h1>

<ul>
    
    @forelse ($actores as $actor )
        <li style="line-height: 40px;"><a style="font-size: 20px; margin: 10px;" href="{{$actor->id}}"> {{ $actor->getNombreCompleto() }} </a></li>

    @empty
        {{'no hay actores, amigo'}}
    @endforelse
 
</ul>


  </body>
</html>