<?php

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
//rutas de prueba
Route::get('product', 'TestController@index');
Route::get('product/{id}', 'ProductController@show');
//Ruta de carrito de compras
Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');//eliminar 

//ruta para realizar ordenes
Route::post('/order', 'CartController@update');


Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->prefix('')->group(function () {
    //rutas de productos
    Route::get('Admin/product', 'Admin\ProductController@index');
    Route::get('Admin/product/create', 'Admin\ProductController@create');
    Route::get('Admin/product/create', 'Admin\ProductController@traercat');
    Route::post('Admin/product', 'Admin\ProductController@store');
    Route::get('Admin/product/{id}/edit', 'Admin\ProductController@edit');
    Route::post('Admin/product/{id}/edit', 'Admin\ProductController@update');
    Route::put('Admin/activar/{id}', 'Admin\ProductController@activar');
    Route::put('Admin/desactivar/{id}', 'Admin\ProductController@desactivar');
    //images con productos
    Route::get('Admin/product/{id}/images', 'Admin\ImageController@index');//listar
    Route::post('Admin/product/{id}/images', 'Admin\ImageController@store');//crear
    Route::delete('Admin/product/{id}/images', 'Admin\ImageController@destroy');//eliminar  
    Route::get('Admin/product/{id}/images/select/{image}', 'Admin\ImageController@select');//destacar   


    //rutas de categorias
    Route::get('Admin/category', 'CategoryController@index');
});

