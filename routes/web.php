<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});/*
Route::get('/test', function () {
    return "Hola mundo";
});
Route::get('/hola/{nombre?}', function ($nombre = "juan") {
    return "Hola mundo $nombre conocenos: <a href='".route("nosotros")."'>Nosotros</a>";
});

Route::get('/sobre-nosotros-en-la-web', function () {
    return "<h1>Toda l ainformacion sobre nosotros!</h1>";
})->name("nosotros");


Route::get('home/{nombre?}/{apellido?}', function($nombre="Pepe",$apellido="cruz") {
    //$nombre="Andres1";
    // return view('home')->with("nombre1",$nombre)
    //                     ->with("apellido1",$apellido);
    $posts=["Post1","Post2","Post3","Post4","Post5"];
    $posts2=[];
    return view('home',['nombre1'=>$nombre,'apellido1'=>"Mujica",'posts1'=>$posts,'posts2'=>$posts2]);
})->name("home");
*/

Route::resource('dashboard/post', 'dashboard\PostController');