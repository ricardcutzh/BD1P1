<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Pais;
use App\Eleccion;
use Illuminate\Http\Request;

class EleccionController extends Controller
{
    //MUESTRA LOS PARTIDOS QUE EXISTEN Y DE QUE PAISES SON
    public function show()
    {
      $elecciones = DB::table('ELECCION')
                  ->selectRaw('ELECCION.ID_ELECCION, ELECCION.ANIO, ELECCION.NOMBRE, PAIS.NOMBRE AS COUNTRY')
                  ->leftJoin('PAIS', 'ELECCION.ID_PAIS', '=','PAIS.ID_PAIS')
                  ->orderBy('ID_ELECCION', 'desc')
                  ->paginate(10);
      return view("Eleccion/showEleccion")->with(['elecciones'=>$elecciones]);
    }

    public function newView()
    {
      $paises = Pais::orderBy('NOMBRE','desc')->get();
      return view('Eleccion/NewEleccion')->with(['paises'=>$paises]);
    }

    public function Insert(Request $request)
    {
      Eleccion::create(['NOMBRE'=>$request->get('Eleccion'), 'ANIO'=>$request->get('Anio'),'ID_PAIS'=>$request->get('Pais')]);
      return redirect()->route('see_elecciones');
    }

    public function EditView($ID_ELECCION)
    {
      $eleccion = Eleccion::find($ID_ELECCION);
      $asociado = Pais::find($eleccion->ID_PAIS);
      $paises = Pais::where('ID_PAIS','!=', $eleccion->ID_PAIS)->get();
      return view('Eleccion/EditEleccion')->with(['eleccion'=>$eleccion, 'asociado'=>$asociado, 'paises'=>$paises]);
    }

    public function Update(Eleccion $eleccion, Request $request)
    {
      $eleccion->NOMBRE = $request->get('Eleccion');
      $eleccion->ID_PAIS = $request->get('Pais');
      $eleccion->ANIO = $request->get('Anio');
      $eleccion->save();
      return redirect()->route('see_elecciones');
    }

    //FUNCION QUE ELIMINA LA REGION
    public function Delete(Eleccion $eleccion)
    {

      $eleccion->delete();
      return redirect()->route('see_elecciones');
    }
}
