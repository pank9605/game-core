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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'WelcomeController@index');
Route::get('/news', 'WelcomeController@index');

Route::get('/politicas', 'WelcomeController@showPolitics');

Auth::routes();

Route::middleware(['auth','staff','username'])->prefix('staff/founder')->group(function (){
    Route::get('/logs/users','Staff\LogsController@index'); //Table de Logs
    Route::get('/logs/news','Staff\LogsController@showNews'); //Table de Logs de noticias
    Route::post('/logs/news/{id}/restore','Staff\LogsController@restoreNews'); //Restaurar Noticia
    Route::delete('/logs/news/{id}/delete','Staff\LogsController@deleteNews'); //Eliminar Noticia Definitivamente

    Route::get('', 'Staff\FoundersController@index'); //Tabla de Fundadores
    Route::get('/create','Staff\FoundersController@create'); //Formulario de Fundador
    Route::post('/create','Staff\FoundersController@store'); //Registro de Fundador
    Route::get('/edit/{id}','Staff\FoundersController@edit'); //Formulario de Edicion de Fundador
    Route::post('/edit/{id}','Staff\FoundersController@update'); //Editar Fundador
    Route::delete('/{id}/delete','Staff\FoundersController@destroy'); //Eliminar Fundador
});

Route::middleware(['auth','staff','editor','username'])->prefix('staff')->group(function (){

    Route::get('/news', 'Staff\NewsController@index');
    Route::get('/news/create', 'Staff\NewsController@create');
    Route::post('/ckeditor/upload', 'Staff\NewsController@upload')->name('ckeditor.upload');
    Route::post('/news/create', 'Staff\NewsController@store');
    Route::delete('/news/delete/{id}','Staff\NewsController@destroy');

    Route::get('/news/{id}/images', 'Staff\NewsImagesController@index');

    Route::post('/news/{id}/images/create', 'Staff\NewsImagesController@store'); //Registro de imagenes

    Route::get('/news/{id}/edit', 'Staff\NewsController@edit'); //Formulario de Noticia
    Route::post('/news/{id}/update', 'Staff\NewsController@update');// Actualizar Noticia
    Route::get('/news/{id}/images/{image}/featured', 'Staff\NewsImagesController@imageFeatured');
    Route::delete('/news/images/{id}/delete','Staff\NewsImagesController@destroy'); //Eliminar Imagen

});

Route::middleware(['auth','staff','username'])->prefix('staff/editor')->group(function (){
    Route::get('/', 'Staff\EditorController@index');

    Route::post('/create','Staff\EditorController@store'); //Registro de Editor
    Route::get('/edit/{id}','Staff\EditorsController@edit'); //Formulario de Edicion de Editor
    Route::post('/edit/{id}','Staff\EditorController@update'); //Editar Editor
    Route::delete('/{id}/delete','Staff\EditorController@destroy'); //Eliminar Editor
});

Route::get('/porfile/{id}','HomeController@show'); //Formulario para Perfil
Route::post('/porfile/{id}/edit/','HomeController@update'); //Editar Perfil

Route::get('/news/{category}/{clasification}/{id}','WelcomeController@show'); //Noticia
Route::get('/news/{category}','WelcomeController@showCategories'); //Noticia por Categoria

Route::get('/author/{id}','AuthorController@show'); //Perfil del Autor


Route::get('/porfile',function (){
    return view('porfile    ');
});
