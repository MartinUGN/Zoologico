<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ZoologicoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/index', function () {
//     return view('index');
// });

Route::controller(ZoologicoController::class)->group(function(){
    Route::get('zoologico','principal');
    Route::get('zoologico/raton','raton');
    Route::get('zoologico/chivo','chivo');
    Route::get('zoologico/perro','perro');

});


// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos', 'index');
//     Route::get('cursos/create','create');
//     Route::get('cursos/{curso}/{categoria}','show');
// });