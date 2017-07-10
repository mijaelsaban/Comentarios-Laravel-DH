<html>
    <head>
        <title>Agregar Pelicula clase4</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    </head>
    <body>
        <form class="" id="agregarPelicula" name="agregarPelicula" method="POST" action="agregarPelicula">

            {{csrf_field()}}
            <div>
                
                @foreach ($errors->all() as $errores)
                   <p style="background-color: rgba(255, 0,0, 0.3);" class="alert danger"> {{ $errores }} </p>
                @endforeach
               
            </div>
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" />
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating" value="{{old('rating')}}"  />
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="premios" id="premios" value="{{old('premios')}}" />
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" id="duracion" value="{{old('duracion')}}" />
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia">
                    <option value="">Dia</option>
                    <?php for ($i=1; $i < 32; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="mes">
                    <option value="">Mes</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="anio">
                    <option value="">Anio</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    
    <form method="POST" action="agregarPelicula" >  
    {{csrf_field()}}
    <label>ID</label>
    <input type="text" name="id">

    <label>Genre</label>
    <input type="text" name="genre">

    <input type="submit" name="">

    </form>

    </body>
</html>
