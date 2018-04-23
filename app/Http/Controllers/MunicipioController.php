<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Municipio;
use App\Departamento;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
  //METODO QUE DESPLIEGA DEPARTAMENTOS DE UNA MUNICIPIO EN ESPECIFICO
  public function showEspecific(Departamento $departamento)
  {
    $municipios = Municipio::where("ID_DEPARTAMENTO",'=',$departamento->ID_DEPARTAMENTO)->orderBy('ID_MUNICIPIO','desc')->paginate(30);
    return view('Municipio/FilterMunicipio')->with(['municipios'=>$municipios, 'departamento'=>$departamento]);
  }

  public function show()
  {
    $municipios = DB::table('MUNICIPIO')
                ->selectRaw('MUNICIPIO.ID_MUNICIPIO, MUNICIPIO.NOMBRE, DEPARTAMENTO.NOMBRE AS DEPA')
                ->leftJoin('DEPARTAMENTO', 'MUNICIPIO.ID_DEPARTAMENTO', '=','DEPARTAMENTO.ID_DEPARTAMENTO')
                ->orderBy('ID_MUNICIPIO', 'desc')
                ->paginate(30);
    return view("Municipio/showMunicipio")->with(['municipios'=>$municipios]);
  }

  public function newView()
  {
    $departamentos = Departamento::orderBy('NOMBRE','desc')->get();
    return view('Municipio/NewMunicipio')->with(['departamentos'=>$departamentos]);
  }

  //METE UNA NUEVO DEPARTAMENTO EN LA BASSE DE DATOS
  public function Insert(Request $request)
  {
    Municipio::create(['NOMBRE'=>$request->get('Municipio'), 'ID_DEPARTAMENTO'=>$request->get('Departamento')]);
    return redirect()->route('show_especific_municipios',['departamento'=>$request->get('Departamento')]);
  }

  //RETORNA LA VISTA DE EDICION DEL PAIS
  public function EditView($ID_MUNICIPIO)
  {
    $municipio = Municipio::find($ID_MUNICIPIO);
    $asociado = Departamento::find($municipio->ID_DEPARTAMENTO);
    $departamentos = Departamento::where('ID_DEPARTAMENTO','!=', $municipio->ID_DEPARTAMENTO)->get();
    return view('Municipio/EditMunicipio')->with(['municipio'=>$municipio, 'asociado'=>$asociado, 'departamentos'=>$departamentos]);
  }

  //FUNCION QUE SE ENCARGA DE LA ACTUALIZACION DE LOS DATOS DE LA BASE DE DATOS
  public function Update(Municipio $municipio, Request $request)
  {
    $municipio->NOMBRE = $request->get('Municipio');
    $municipio->ID_DEPARTAMENTO = $request->get('Departamento');
    $municipio->save();
    return redirect()->route('show_especific_municipios',['departamento'=>$request->get('Departamento')]);
  }

  //FUNCION QUE ELIMINA LA REGION
  public function Delete(Municipio $municipio)
  {
    $municipio->delete();
    return redirect()->route('show_especific_municipios',['departamento'=>$municipio->ID_DEPARTAMENTO]);
  }
}
