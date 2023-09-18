<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|get: consultar
post: guardar
delete eliminar
put actualiae
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('vista_encuesta','EncuestaController@index')->name('vista_encuesta');

*/

Route::get('vista_encuesta', [EncuestaController::class,'index'])->name('vista_encuesta');