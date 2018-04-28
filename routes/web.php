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
Route::name('show_especific_Regions')->get('/Pais/Regions/{pais}', 'RegionController@showEspecific');//YA
Route::name('see_regions')->get('/Region/Show', 'RegionController@show');//YA
Route::name('add_region_view')->get('/Add/Region', 'RegionController@newView');//YA
Route::name('editar_region')->get('/Region/Edit/{region}', 'RegionController@EditView');//YA
Route::name('edit_region')->post('/Region/{region}/Update', 'RegionController@Update');//YA
Route::name('insert_region')->post('/Register/Region', 'RegionController@Insert');//YA
Route::name('delete_region')->delete('/Region/{region}/Delete', 'RegionController@Delete');//YA
//-------------------------------

//---------DEPARTAMENTOS------------
Route::name('show_especific_Departamentos')->get('/Regiones/Departamentos/{region}', 'DepartamentoController@showEspecific');
Route::name('see_departamentos')->get('/Departamento/Show', 'DepartamentoController@show');
Route::name('add_departamento_view')->get('/Add/Departamento', 'DepartamentoController@newView');
Route::name('editar_departamento')->get('/Departamento/Edit/{departamento}', 'DepartamentoController@EditView');
Route::name('edit_departamento')->post('/Departamento/{departamento}/Update', 'DepartamentoController@Update');
Route::name('insert_departamento')->post('/Register/Departamento', 'DepartamentoController@Insert');
Route::name('delete_departamento')->delete('/Departamento/{departamento}/Delete', 'DepartamentoController@Delete');
//----------------------------------

//----------MUNICIPIOS---------------
Route::name('show_especific_municipios')->get('/Departamentos/Municipios/{departamento}', 'MunicipioController@showEspecific');
Route::name('see_municipio')->get('/Municipio/Show', 'MunicipioController@show');
Route::name('add_municipio_view')->get('/Add/Municipio', 'MunicipioController@newView');
Route::name('editar_municipio')->get('/Municipio/Edit/{municipio}', 'MunicipioController@EditView');
Route::name('edit_municipio')->post('/Municipio/{municipio}/Update', 'MunicipioController@Update');
Route::name('insert_municipio')->post('/Register/Municipio', 'MunicipioController@Insert');
Route::name('delete_municipio')->delete('/Municipio/{municipio}/Delete', 'MunicipioController@Delete');
//-----------------------------------

//-----------PARTIDOS---------------
Route::name('see_partidos')->get('/Partido/Show', 'PartidoController@show');
Route::name('add_partido_view')->get('/Add/Partido', 'PartidoController@newView');
Route::name('editar_partido')->get('/Partido/Edit/{partido}', 'PartidoController@EditView');
Route::name('edit_partido')->post('/Partido/{partido}/Update', 'PartidoController@Update');
Route::name('insert_partido')->post('/Register/Partido', 'PartidoController@Insert');
Route::name('delete_partido')->delete('/Partido/{partido}/Delete', 'PartidoController@Delete');
//----------------------------------

//-----------ELECCIONES--------------
Route::name('see_elecciones')->get('/Eleccion/Show', 'EleccionController@show');
Route::name('add_eleccion_view')->get('/Add/Eleccion', 'EleccionController@newView');
Route::name('editar_eleccion')->get('/Eleccion/Edit/{eleccion}', 'EleccionController@EditView');
Route::name('edit_eleccion')->post('/Eleccion/{eleccion}/Update', 'EleccionController@Update');
Route::name('insert_eleccion')->post('/Register/Eleccion', 'EleccionController@Insert');
Route::name('delete_eleccion')->delete('/Eleccion/{eleccion}/Delete', 'EleccionController@Delete');
//-----------------------------------

//----------DETALLES_VOTOS
Route::name('see_detalles')->get('/Detalles_votos/Show', 'DetalleController@show');
Route::name('see_esp_det')->get('/Detalles_votos/Show/{municipio}', 'DetalleController@showEspecific');
//------------------------

//RUTA TEMPORAL
Route::get('/temp', function(){
  return view('Region/NewRegion');
});
