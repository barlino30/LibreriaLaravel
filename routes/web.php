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
//Route::resource('Home', 'PrincipalController');
Route::get('Home', 'PrincipalController@index');
Route::get('Crear', 'PrincipalController@create');
Route::get('Creado', 'PrincipalController@store');

Route::get('Home/{items}', 'PrincipalController@destroy')->name('eliminar');

Route::get('Home/{user}/edit', 'PrincipalController@edit')->name('editar');
Route::get('Home/{user}/update', 'PrincipalController@update')->name('editado');

Route::get('/Contactenos', 'PrincipalController@Contactenos');

Route::get('/Quienes', 'PrincipalController@Quienes');

Route::get('/General', 'PrincipalController@General');

Route::get('/Infantiles', 'PrincipalController@Infantiles');

Route::get('/Ingles', 'PrincipalController@Ingles');

Route::get('/Juveniles', 'PrincipalController@Juveniles');

Route::get('/Literatura', 'PrincipalController@Literatura');

Route::get('/Profesionales', 'PrincipalController@Profesionales');

Route::get('/Textos', 'PrincipalController@Textos');

Route::get('/Almacen', 'PrincipalController@Almacen');

Route::get('/Buscador', 'PrincipalController@Buscador');

Route::get('/VistaP', 'PrincipalController@VistaP');

Route::get('/Tienda', 'PrincipalController@Tienda');