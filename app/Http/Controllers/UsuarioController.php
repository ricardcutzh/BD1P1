<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Pais;
use App\Region;
use App\Departamento;
use App\Municipio;
use App\Partido;
use App\Eleccion;
use App\Detalle;
use App\Sexo;
use App\Etnia;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // FUNCION QUE HACER
    public function login(Request $request)
    {
      //PARA QUE EL FORMULARIO NO SEA ENVIADO VACIO
      $this->validate($request, [
        'Usuario' => 'required',
        'Password' => 'required'
      ]);

      //CONSULTA PARA VERIFICAR QUE EL USUARIO EXISTA EN LA BASE DE DATOS
      $res = DB::table('USUARIO')
              ->select(DB::raw('COUNT(*) AS res'))
              ->where([
                ['NOMBRE','=', $request->get('Usuario')],
                ['PASSW', '=', $request->get('Password')],
              ])->value('res');
      if($res == 1)
      {
        return redirect()->route('index');
      }
      return "error";
    }


    public function index()
    {
      //CONTANDO LOS DATOS DE PAISES EN LA BASE DE DATOS
      $paises = Pais::count();

      //CONTANDO LOS DATOS DE LAS REGIONES
      $regiones = Region::count();

      //CONTANDO LOS DATOS DE LOS DEPARTAMENTOS
      $departamentos = Departamento::count();

      //CONTANDO LOS DATOS DE LOS MUNICIPIOS
      $municipios = Municipio::count();

      //CONTANDOO LOS DATOS DE LOS PARTIDOS
      $partidos = Partido::count();

      //CONTADO LOS DATOS DE LAS ELECCIONES
      $elecciones = Eleccion::count();

      //CONTANDO LOS DATOS DE LOS DETALLES
      $detalles = Detalle::count();

      //CONTANDO LOS SEXOS
      $sexos = Sexo::count();

      //CONTANDO LAS ETNIAS
      $etnias = Etnia::count();

      //CONTANDO LOS USUARIOS
      $usuarios = Usuario::count();

      //METIENDO AL ARREGLO
      $data = array(
        'paises' => $paises,
        'regiones' => $regiones,
        'departamentos' => $departamentos,
        'municipios' => $municipios,
        'partidos' => $partidos,
        'elecciones' => $elecciones,
        'detalles' => $detalles,
        'sexos' => $sexos,
        'etnias' => $etnias,
        'usuarios' => $usuarios
      );
      return view("User/Index", compact('data'));
    }

    public function show(Request $request)
    {
      $users = Usuario::all();
      return view("User/showUs")->with(['users'=>$users]);
    }
}
