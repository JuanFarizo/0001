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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('dashBoard');
})->middleware(['auth', 'isAdmin']);


Route::prefix('admin')->group(function () {
Route::resource('producto', 'ProductoController')->middleware(['auth', 'isAdmin']);
Route::resource('categoria', 'CategoriaController')->middleware(['auth', 'isAdmin']);
Route::get('contacto', 'ContactoController@index')->middleware('auth', 'isAdmin');
});

Route::get('inicio', 'PrincipalController@inicio');

Route::get('libros/{categoria}', ['as' => 'libros', 'uses' => 'PrincipalController@productosCategoria']);
Route::get('papeleria/{categoria}', ['as' => 'papeleria', 'uses' => 'PrincipalController@productosCategoria']);

Route::get('productos', 'PrincipalController@muestraProductos');

Route::get('contacto', 'ContactoController@create');
Route::post('contacto', 'ContactoController@store');
Route::put('admin/contacto/{id}', 'ContactoController@update');

