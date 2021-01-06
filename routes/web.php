<?php

use App\Http\Controllers\PersonaController;
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


// Route::get('/','PersonaController@index');

Route::get('/',[PersonaController::class,'mostrar'])->name('persona.index');
Route::post('/insertar',[PersonaController::class,'insertar'])->name('persona.store');
Route::post('/actualizar',[PersonaController::class,'actualizar'])->name('persona.update');
Route::post('/eliminar',[PersonaController::class,'eliminar'])->name('persona.delete');
// persona.update

