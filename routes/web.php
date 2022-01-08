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
   // return view('welcome');
return "Bienvennidos a la pagina principal";

});

route::get('cursos', function (){
    return "Bienvenidos a la página cursos";
});

Route::get('cursos/create', function () {
    return "En esta página podrás crear un curso";
});

/*

route::get('cursos/{curso}', function($curso){
    return "Bienvenio al curso: $curso";
});

Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return "Bienvenido al curso $curso, de la categoria $categoria ";
});
*/
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria)
    return "Bienvenido al curso $curso, de la categoria $categoria ";
    else
    return "Bienvenio al curso: $curso";
});
