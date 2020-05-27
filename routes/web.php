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
//Una vez que te logueás te retorna a la vista de inicio
 Route::get('/login,', function(){
    return view('libreria');
 });

 //Una vez que te logueás te retorna a la vista de inicio
Route::get('/logout', function() {
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Dashboard
Route::get('/admin', function () {
    return view('layouts.master');
})->middleware(['auth', 'isAdmin']);

//Listado de usuarios, categorias, productos y consultas(contacto) en el dashboard(ADMINISTRADOR)
Route::prefix('admin')->group(function () {
Route::resource('producto', 'ProductoController')->middleware(['auth', 'isAdmin']);
Route::resource('categoria', 'CategoriaController')->middleware(['auth', 'isAdmin']);
Route::get('contacto', 'ContactoController@index')->middleware('auth', 'isAdmin');
Route::get('usuarios', 'UserController@index')->middleware('auth', 'isAdmin');
});

//Página principal
Route::get('inicio', 'PrincipalController@inicio');

//Muestra productos por categoria
Route::get('libros/{categoria}', ['as' => 'libros', 'uses' => 'PrincipalController@productosCategoria']);
Route::get('papeleria/{categoria}', ['as' => 'papeleria', 'uses' => 'PrincipalController@productosCategoria']);

//Muestra todos los productos
Route::get('productos', 'PrincipalController@muestraProductos');

//Contacto
Route::get('contacto', 'ContactoController@create');
Route::post('contacto', 'ContactoController@store');
Route::put('admin/contacto/{id}', 'ContactoController@update');

//Detalle producto
Route::get('/producto/{id}',  'PrincipalController@show');

//Carrito de compras
Route::get('carrito', 'carritoController@carrito')->middleware('auth');
Route::get('carrito/{id}', 'carritoController@add');
Route::get('carrito/delete/{id}',['as' => 'carrito-delete', 'uses' => 'carritoController@delete']);

//Pedido
Route::get('', 'PedidoController@crearPedido');
Route::put('admin/pedido', 'PedidoController@store');
//Route::put('admin/pedido/{id}', 'PedidoController@update');


//Perfil usuario
Route::get('/perfil-usuario/{id}', 'UserController@show');

//Editar perfil de usuario
Route::get('/perfil-usuario/{id}/edit', 'UserController@edit');

Route::put('/perfil-usuario/{id}', 'UserController@update');
