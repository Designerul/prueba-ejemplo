<?php

use App\Http\Controllers\TareaController;
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
});


Route::resource('/tarea', TareaController::class);
// Route::get('/tarea', [TareaController::class, 'index']);
// Route::get('/tarea/create', [Tareacontroller::class, 'create']);
// Route::post('/tarea/store', [Tareacontroller::class, 'store']);
// show
// edit
// update
// delete

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