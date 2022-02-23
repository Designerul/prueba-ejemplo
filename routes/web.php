<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
});

Route::get('/tareas', function () {
    $tareas = DB::table('tareas')->get();
    //dd($tareas);
    return view('tareas.indexTareas', compact('tareas'));
});

Route::get('/hola-mundo', function () {
    return view('paginas/hola-mundo');
});

Route::get('/grabaciones/{nombre}/{aa?}/{cantidad?}', function ($nombre, $aa = null, $cantidad = 10) {
    $otra = 'mi otra variable';
    return view('paginas.grabaciones', compact('nombre', 'aa', 'cantidad'));
    // ->with([
    //     'nombre' => $nombre, 
    //     'otra' => 'otra variable'
    // ]);
});