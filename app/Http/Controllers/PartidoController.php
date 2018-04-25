<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Pais;
use App\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
  public function show()
  {
    $partidos = DB::table('PARTIDO')
                ->selectRaw('PARTIDO.ID_PARTIDO, PARTIDO.INICIALES, PARTIDO.NOMBRE, PAIS.NOMBRE AS COUNTRY')
                ->leftJoin('PAIS', 'PARTIDO.ID_PAIS', '=','PAIS.ID_PAIS')
                ->orderBy('ID_PARTIDO', 'desc')
                ->paginate(10);
    return view("Partido/showPartido")->with(['partidos'=>$partidos]);
  }

  public function newView()
  {
    $paises = Pais::orderBy('NOMBRE','desc')->get();
    return view('Partido/NewPartido')->with(['paises'=>$paises]);
  }

  public function Insert(Request $request)
  {
    Partido::create(['NOMBRE'=>$request->get('Partido'), 'INICIALES'=>$request->get('Iniciales'),'ID_PAIS'=>$request->get('Pais')]);
    return redirect()->route('see_partidos');
  }

  public function EditView($ID_PARTIDO)
  {
    $partido = Partido::find($ID_PARTIDO);
    $asociado = Pais::find($partido->ID_PAIS);
    $paises = Pais::where('ID_PAIS','!=', $partido->ID_PAIS)->get();
    return view('Partido/EditPartido')->with(['partido'=>$partido, 'asociado'=>$asociado, 'paises'=>$paises]);
  }

  public function Update(Partido $partido, Request $request)
  {
    $partido->NOMBRE = $request->get('Partido');
    $partido->ID_PAIS = $request->get('Pais');
    $partido->INICIALES = $request->get('Iniciales');
    $partido->save();
    return redirect()->route('see_partidos');
  }

  //FUNCION QUE ELIMINA LA REGION
  public function Delete(Partido $partido)
  {

    $partido->delete();
    return redirect()->route('see_partidos');
  }
}
