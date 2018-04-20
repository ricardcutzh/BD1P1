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
//RUTA PARA LOS USUARIOS
Route::name('see_user')->get('/User/Show', 'UsuarioController@show');
Route::name('index')->get('/Dashboard', 'UsuarioController@index');
Route::name('add_user_view')->get('/Add/User', function(){
  return view('User/NewUser');
});
Route::name('registrar_us')->post('/Register/User', 'UsuarioController@register');
Route::name('editar_us')->get('/Edit/{usuario}', 'UsuarioController@EditUsuario');
Route::name('edit_us')->post('/User/{usuario}/Update', 'UsuarioController@Update');
Route::name('delete_us')->delete('/User/{usuario}/Delete', 'UsuarioController@Delete');
//-----------------------------

//RUTA TEMPORAL
Route::get('/temp', function(){
  return view('User/showUs');
});
