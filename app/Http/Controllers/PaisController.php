<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    //CONTROLADOR DEL PAIS
    public function show()
    {
      $paises = Pais::orderBy('ID_PAIS','desc')->paginate(12);
      return view("Pais/showPais")->with(['paises'=>$paises]);
    }

    //METE INFORMACION SOBRE LOS PAISES
    public function Insert(Request $request)
    {
      Pais::create(['NOMBRE'=>$request->get('Pais')]);
      return redirect()->route('see_pais');
    }

    //RETORNA LA VISTA DE LA EDICION DEL PAIS
    public function EditView($ID_PAIS)
    {
      $pais = Pais::find($ID_PAIS);

      return view('Pais/EditPais')->with(['pais'=>$pais]);
    }

    //FUNCION QUE SE ENCARGA DE LA ACTUALIZACION DE LOS DATOS DE LA BASE DE DATOS
    public function Update(Pais $pais, Request $request)
    {
      $pais->NOMBRE = $request->get('Pais');
      $pais->save();
      return redirect()->route('see_pais');
    }

    //FUNCION QUE ELIMINA EL PAIS
    public function Delete(Pais $pais)
    {
      $pais->delete();
      return redirect()->route('see_pais');
    }
}
