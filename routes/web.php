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
});

Route::get('/categoria', 'App\Http\Controllers\CategoriaController@show');
Route::post('/categoria', 'App\Http\Controllers\CategoriaController@store')->name('registrar_categoria');
Route::post('/categoria/editar/{id}', 'App\Http\Controllers\CategoriaController@update')->name('alterar_categoria');
Route::post('/categoria/deletar/{id}', 'App\Http\Controllers\CategoriaController@destroy')->name('excluir_categoria');
