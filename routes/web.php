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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('news/ckeditor/upload', 'NewsController@upload')->name('upload');

Route::get('/admin/founder', 'FoundersController@index');
Route::get('/admin/founder/create','FoundersController@create');
Route::post('/admin/founder/create','FoundersController@store'); //Nuevo Registro
Route::get('/admin/founder/edit/{id}','FoundersController@show'); //Formulario para Editar Registro
Route::post('/admin/founder/edit/{id}','FoundersController@update'); //Editar Registro


Route::get('/news', 'NewsController@index');
Route::get('/news/create', 'NewsController@create');
Route::post('/news/create', 'NewsController@store');

Route::get('/porfile/{id}','HomeController@show'); //Formulario para Perfil
Route::post('/porfile/edit/{id}','HomeController@update'); //Editar Perfil



Route::delete('/admin/founder/{id}/delete','FoundersController@destroy'); //Eliminar


Route::get('/admin',function (){
    return view('admin.index');
});


Route::get('/admin/news',function (){
    return view('admin.news');
});
