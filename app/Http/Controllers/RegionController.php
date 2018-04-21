<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Region;
use App\Pais;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    //METODO QUE DESPLIEGA REGIONES DE UN PAIS EN ESPECIFICO
    public function showEspecific(Pais $pais)
    {
      $regiones = Region::where("ID_PAIS", $pais->ID_PAIS)->orderBy('ID_REGION','desc')->paginate(10);
      return view('Region/FilterRegion')->with(['regiones'=>$regiones, 'pais'=>$pais]);
    }

    public function show()
    {
      //$regiones = Region::leftJoin('PAIS', 'REGION.ID_PAIS', '=','PAIS.ID_PAIS')->orderBy('ID_REGION', 'desc')->paginate(7);

      //$regiones = Region::raw('REGION.ID_REGION, REGION.NOMBRE, PAIS.NOMBRE AS PAIS FROM REGION, PAIS WHRE REGION.ID_PAIS = PAIS.ID_PAIS')->paginate(7);dd($regiones);
      //$regiones = DB::select('SELECT REGION.ID_REGION, REGION.NOMBRE, PAIS.NOMBRE AS COUNTRY FROM REGION, PAIS WHERE REGION.ID_PAIS = PAIS.ID_PAIS');
      $regiones = DB::table('REGION')
                  ->selectRaw('REGION.ID_REGION, REGION.NOMBRE, PAIS.NOMBRE AS COUNTRY')
                  ->leftJoin('PAIS', 'REGION.ID_PAIS', '=','PAIS.ID_PAIS')
                  ->orderBy('ID_REGION', 'desc')
                  ->paginate(7);
      return view("Region/showRegion")->with(['regiones'=>$regiones]);
    }

    //METE UNA NUEVA ETNIA EN LA BASSE DE DATOS
    public function Insert(Request $request)
    {

    }

    //RETORNA LA VISTA DE EDICION DEL PAIS
    public function EditView($ID_REGION)
    {

    }

    //FUNCION QUE SE ENCARGA DE LA ACTUALIZACION DE LOS DATOS DE LA BASE DE DATOS
    public function Update(Region $region, Request $request)
    {

    }

    //FUNCION QUE ELIMINA LA REGION
    public function Delete(Region $region)
    {

    }
}
