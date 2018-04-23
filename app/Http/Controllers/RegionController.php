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

    public function newView()
    {
      $paises = Pais::orderBy('NOMBRE','desc')->get();
      return view('Region/NewRegion')->with(['paises'=>$paises]);
    }

    //METE UNA NUEVA ETNIA EN LA BASSE DE DATOS
    public function Insert(Request $request)
    {
      Region::create(['NOMBRE'=>$request->get('Region'), 'ID_PAIS'=>$request->get('Pais')]);
      return redirect()->route('show_especific_Regions',['pais'=>$request->get('Pais')]);
    }

    //RETORNA LA VISTA DE EDICION DEL PAIS
    public function EditView($ID_REGION)
    {
      $region = Region::find($ID_REGION);
      $asociado = Pais::find($region->ID_PAIS);
      $paises = Pais::where('ID_PAIS','!=', $region->ID_PAIS)->get();
      return view('Region/EditRegion')->with(['region'=>$region, 'asociado'=>$asociado, 'paises'=>$paises]);
    }

    //FUNCION QUE SE ENCARGA DE LA ACTUALIZACION DE LOS DATOS DE LA BASE DE DATOS
    public function Update(Region $region, Request $request)
    {
      $region->NOMBRE = $request->get('Region');
      $region->ID_PAIS = $request->get('Pais');
      $region->save();
      return redirect()->route('show_especific_Regions',['pais'=>$request->get('Pais')]);
    }

    //FUNCION QUE ELIMINA LA REGION
    public function Delete(Region $region)
    {

      $region->delete();
      return redirect()->route('show_especific_Regions',['pais'=>$region->ID_PAIS]);
    }
}
