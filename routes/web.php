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

Route::name('main')->get('/', function () {
    return view('LogIn');
});


//RUTA PRA LOGRAR REALIZAR EL LOGIN
Route::name('log_in')->post('/Log_In','UsuarioController@login');
Route::name('see_user')->get('/User/Show', 'UsuarioController@show');
Route::name('index')->get('/Dashboard', 'UsuarioController@index');

//RUTA TEMPORAL
Route::get('/temp', function(){
  return view('User/showUs');
});
