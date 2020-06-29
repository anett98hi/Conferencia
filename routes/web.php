<?php
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
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
})->name('welcome');;




Route::Resource('Principal','PrincipalController');
Route::Resource('Usuarios','UserController');
Route::Resource('Layout','Layouts');
Route::Resource('Proyectos','ProyectosController');
Route::Resource('Cuestionario1','Cuestionario1Controller');





Route::get('/principal', function(){
    return view('layouts.principal');
})->name('principal');


// Auth::routes();
// Authentication Routes...
Route::get('Inicio de Sesión', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('Inicio de Sesión', 'Auth\LoginController@login');
Route::post('Cerrar Sesión', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
if ($options['Registro'] ?? true) {
    Route::get('Registro', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('Registro', 'Auth\RegisterController@register');
}
Route::get('/home', 'HomeController@index')->name('home');
