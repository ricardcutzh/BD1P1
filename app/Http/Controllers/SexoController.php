<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Sexo;
use Illuminate\Http\Request;

class SexoController extends Controller
{
    //MUESTRA Y LISTA LOS DATOS DE LA TABLA DE SEXO
    public function show()
    {
      $sexos = Sexo::orderBy('ID_SEXO', 'desc')->paginate(5);
      return view("Sexo/showSexo")->with(['sexos'=>$sexos]);
    }

    //METE UNA NUEVA ETNIA EN LA BASSE DE DATOS
    public function Insert(Request $request)
    {
      Sexo::create(['NOMBRE'=>$request->get('Sexo')]);
      return redirect()->route('see_sexos');
    }

    //RETORNA LA VISTA DE EDICION DEL PAIS
    public function EditView($ID_SEXO)
    {
      $sexo = Sexo::find($ID_SEXO);
      return view('Sexo/EditSexo')->with(['sexo'=>$sexo]);
    }

    //FUNCION QUE SE ENCARGA DE LA ACTUALIZACION DE LOS DATOS DE LA BASE DE DATOS
    public function Update(Sexo $sexo, Request $request)
    {
      $sexo->NOMBRE = $request->get('Sexo');
      $sexo->save();
      return redirect()->route('see_sexos');
    }

    //FUNCION QUE ELIMINA EL Sexo
    public function Delete(Sexo $sexo)
    {
      $sexo->delete();
      return redirect()->route('see_sexos');
    }
}
