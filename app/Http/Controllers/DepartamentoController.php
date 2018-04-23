<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Departamento;
use App\Region;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
  //METODO QUE DESPLIEGA DEPARTAMENTOS DE UNA REGION EN ESPECIFICO
  public function showEspecific(Region $region)
  {
    $departamentos = Departamento::where("ID_REGION",'=',$region->ID_REGION)->orderBy('ID_DEPARTAMENTO','desc')->paginate(10);
    return view('Departamento/FilterDepartamento')->with(['departamentos'=>$departamentos, 'region'=>$region]);
  }

  public function show()
  {
    $departamentos = DB::table('DEPARTAMENTO')
                ->selectRaw('DEPARTAMENTO.ID_DEPARTAMENTO, DEPARTAMENTO.NOMBRE, REGION.NOMBRE AS REG')
                ->leftJoin('REGION', 'DEPARTAMENTO.ID_REGION', '=','REGION.ID_REGION')
                ->orderBy('ID_DEPARTAMENTO', 'desc')
                ->paginate(10);
    return view("Departamento/showDepartamento")->with(['departamentos'=>$departamentos]);
  }

  public function newView()
  {
    $regiones = Region::orderBy('NOMBRE','desc')->get();
    return view('Departamento/NewDepartamento')->with(['regiones'=>$regiones]);
  }

  //METE UNA NUEVO DEPARTAMENTO EN LA BASSE DE DATOS
  public function Insert(Request $request)
  {
    Departamento::create(['NOMBRE'=>$request->get('Departamento'), 'ID_REGION'=>$request->get('Region')]);
    return redirect()->route('show_especific_Departamentos',['region'=>$request->get('Region')]);
  }

  //RETORNA LA VISTA DE EDICION DEL PAIS
  public function EditView($ID_DEPARTAMENTO)
  {
    $departamento = Departamento::find($ID_DEPARTAMENTO);
    $asociado = Region::find($departamento->ID_REGION);
    $regiones = Region::where('ID_REGION','!=', $departamento->ID_REGION)->get();
    return view('Departamento/EditDepartamento')->with(['departamento'=>$departamento, 'asociado'=>$asociado, 'regiones'=>$regiones]);
  }

  //FUNCION QUE SE ENCARGA DE LA ACTUALIZACION DE LOS DATOS DE LA BASE DE DATOS
  public function Update(Departamento $departamento, Request $request)
  {
    $departamento->NOMBRE = $request->get('Departamento');
    $departamento->ID_REGION = $request->get('Region');
    $departamento->save();
    return redirect()->route('show_especific_Departamentos',['region'=>$request->get('Region')]);
  }

  //FUNCION QUE ELIMINA LA REGION
  public function Delete(Departamento $departamento)
  {
    $departamento->delete();
    return redirect()->route('show_especific_Departamentos',['region'=>$departamento->ID_REGION]);
  }
}
