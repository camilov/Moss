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




Route::group(['prefix'=>'fw'], function(){   
	Route::resource('users','UserController');
	Route::resource('transacciones','TransaccionController');
	Route::resource('recetas','RecetaController');
	Route::get('recetas/{id_receta}/destroy',[
	       'uses' => 'RecetaController@destroy',
	        'as'  => 'recetas.destroy'
	    ]);

	Route::resource('productos','ProductoController');
	Route::resource('operaciones','OperacionesController');
	});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
