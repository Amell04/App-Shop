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
Route::get('product', 'TestController@index');


Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->prefix('')->group(function () {
    //rutas de productos
    Route::get('Admin/product', 'ProductController@index');
    Route::get('Admin/product/create', 'ProductController@create');
    Route::get('Admin/product/create', 'ProductController@traercat');
    Route::post('Admin/product', 'ProductController@store');
    Route::get('Admin/product/{id}/edit', 'ProductController@edit');
    Route::post('Admin/product/{id}/edit', 'ProductController@update');
    Route::put('Admin/activar/{id}', 'ProductController@activar');
    Route::put('Admin/desactivar/{id}', 'ProductController@desactivar');
    //images con productos
    Route::get('Admin/product/{id}/images', 'ImageController@index');//listar
    Route::post('Admin/product/{id}/images', 'ImageController@store');//crear
    Route::delete('Admin/product/{id}/images', 'ImageController@destroy');//eliminar  
    Route::get('Admin/product/{id}/images/select/{image}', 'ImageController@select');//destacar   



    //rutas de categorias
    Route::get('Admin/category', 'CategoryController@index');
});

   