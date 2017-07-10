<?php
use App\Actor;


// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |


Route::get('/', function () {
    return view('welcome');
});
//el signo de pregunta es para parametros opcionales
// las llaves son para pasar variables
// Route::get('peliculas/{pagina?}', function ($pagina=1) {
//     return '<h1>Hola Peliculas '.$pagina.'</h1>';
// });
//laravel sabe que tiene que ir a la carpeta de views y sabe que la exetension es .blade.php
Route::get('/miPrimerRuta', function () {
    return '<h1>Creé mi primer ruta en Laravel</h1>';
});

// ejemeplo  @ el arroba va el metodo y antes va el controller
Route::get('/ejemplo', 'EjemploController@ejemplo');


Route::get('peliculas/{id}', 'PeliculasController@buscarPeliculaId');
            //ruta         //Controller      //metodo
							//o funcion anonima
Route::get('peliculas', 'PeliculasController@listaPeliculas');
Route::get('nuevaPelicula', 'PeliculasController@agregarPelicula');
Route::post('nuevaPelicula', 'PeliculasController@nuevaPelicula');


Route::get('lista', 'PeliculasController@getPeliculas');

Route::get('agregarPelicula', 'ValidarController@registrarPelicula');
// Route::post('agregarPelicula', 'ValidarController@validacion');
Route::post('agregarPelicula', 'ValidarController@validacion');

//como hacer para tener dos submit en la misma pagina??
Route::post('agregarPelicula', 'ValidarController@update');
Route::get('genre', 'GenreController@index');
//aca esta la relacion de generos y peliculas donde voy a mostrar las peliculas de x genero.
Route::get('genre/{id}', 'GenreController@show');

//aca esta la funcion de muchos a muchos en el metodo details
Route::get('movie/{numero}', 'GenreController@details');

Route::get('actor', 'ActorController@index');
Route::get('actor/{id}', 'ActorController@show');

// Route::get('admin/peliculas', 'App\AdminController@index ');



//para crear un controlador mas un modelo mas un request(que lo que hace es en el controlador agregarle todos los metodos necesarios se hace desde la terminal con make:controller -m -)


// Route::get('actors', 'ActorsController@index');
// Route::get('actors/{id}', 'ActorsController@show');


// Route::get('actors/create', 'ActorsController@create');
// Route::post('actors/create', 'ActorsController@store');
// Route::get('actors/{id}/update', 'ActorsController@edit');
// Route::put('actors/{id}/update', 'ActorsController@update');
// Route::delete('actors/{id}', 'ActorsController@destroy');


// php artisan vendor:publish
// (mail, 503, pagination )
// agregar carpeta en views errors con 503 y 404   .blade.php




//
// Route::get('resultado/{numero}/{numero2?}', function ($numero, $numero2=1) {
//     if ($numero2!==1) {
//         return $numero2 * $numero;
//     }
//     if ($numero % 2 === 0) {
//         return '<h1>'.$numero.' es par</h1>';
//     }else {
//         return '<h1>'.$numero.' es impar</h1>';
//     }
// });

//php artisan route:list
// Auth::routes();
       
 
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('registracion', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('home');




