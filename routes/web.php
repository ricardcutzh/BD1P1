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
Route::name('editar_us')->get('User/Edit/{usuario}', 'UsuarioController@EditUsuario');
Route::name('edit_us')->post('/User/{usuario}/Update', 'UsuarioController@Update');
Route::name('delete_us')->delete('/User/{usuario}/Delete', 'UsuarioController@Delete');
//-----------------------------
//------ PAISES ---------------
Route::name('see_pais')->get('/Country/Show', 'PaisController@show');
Route::name('add_pais_view')->get('/Add/Country', function(){
  return view('Pais/NewPais');
});
Route::name('editar_pais')->get('Country/Edit/{pais}', 'PaisController@EditView');
Route::name('edit_pais')->post('/Country/{pais}/Update', 'PaisController@Update');
Route::name('insert_pais')->post('/Register/Pais', 'PaisController@Insert');
Route::name('delete_pais')->delete('/Country/{pais}/Delete', 'PaisController@Delete');
//-----------------------------
//---------ETNIAS--------------
Route::name('see_etnias')->get('/Etnia/Show', 'EtniaController@show');
Route::name('add_etnia_view')->get('/Add/Etnia', function(){
  return view('Etnia/NewEtnia');
});
Route::name('editar_etnia')->get('/Etnia/Edit/{etnia}', 'EtniaController@EditView');
Route::name('edit_etnia')->post('/Etnia/{etnia}/Update', 'EtniaController@Update');
Route::name('insert_etnia')->post('/Register/Etnia', 'EtniaController@Insert');
Route::name('delete_etnia')->delete('/Etnia/{etnia}/Delete', 'EtniaController@Delete');
//-----------------------------
//---------SEXO----------------
Route::name('see_sexos')->get('/Sexo/Show', 'SexoController@show');
Route::name('add_sexo_view')->get('/Add/Sexo', function(){
  return view('Sexo/NewSexo');
});
Route::name('editar_sexo')->get('/Sexo/Edit/{sexo}', 'SexoController@EditView');
Route::name('edit_sexo')->post('/Sexo/{sexo}/Update', 'SexoController@Update');
Route::name('insert_sexo')->post('/Register/Sexo', 'SexoController@Insert');
Route::name('delete_sexo')->delete('/Sexo/{sexo}/Delete', 'SexoController@Delete');
//-----------------------------
//----------REGIONES-----------
Route::name('show_especific_Regions')->get('/Pais/Regions/{pais}', 'RegionController@showEspecific');
Route::name('see_regions')->get('/Region/Show', 'RegionController@show');
Route::name('add_region_view')->get('/Add/Region', function(){
  return view('Region/NewRegion');
});
Route::name('editar_region')->get('/Region/Edit/{region}', 'RegionController@EditView');
Route::name('edit_region')->post('/Region/{region}/Update', 'RegionController@Update');
Route::name('insert_region')->post('/Register/Region', 'RegionController@Insert');
Route::name('delete_region')->delete('/Region/{region}/Delete', 'RegionController@Delete');
//-------------------------------

//RUTA TEMPORAL
Route::get('/temp', function(){
  return view('Pais/showPais');
});
