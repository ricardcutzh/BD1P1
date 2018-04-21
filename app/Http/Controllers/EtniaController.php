<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Etnia;
use Illuminate\Http\Request;

class EtniaController extends Controller
{
    //MUESTRA TODAS LAS ETNIAS REGISTRADAS
    public function show()
    {
      $etnias = Etnia::orderBy('ID_ETNIA', 'desc')->paginate(12);
      return view("Etnia/showEtnia")->with(['etnias'=>$etnias]);
    }

    //METE UNA NUEVA ETNIA EN LA BASSE DE DATOS
    public function Insert(Request $request)
    {
      Etnia::create(['NOMBRE'=>$request->get('Etnia')]);
      return redirect()->route('see_etnias');
    }

    //RETORNA LA VISTA DE EDICION DEL PAIS
    public function EditView($ID_ETNIA)
    {
      $etnia = Etnia::find($ID_ETNIA);
      return view('Etnia/EditEtnia')->with(['etnia'=>$etnia]);
    }

    //FUNCION QUE SE ENCARGA DE LA ACTUALIZACION DE LOS DATOS DE LA BASE DE DATOS
    public function Update(Etnia $etnia, Request $request)
    {
      $etnia->NOMBRE = $request->get('Etnia');
      $etnia->save();
      return redirect()->route('see_etnias');
    }

    //FUNCION QUE ELIMINA EL PAIS
    public function Delete(Etnia $etnia)
    {
      $etnia->delete();
      return redirect()->route('see_etnias');
    }
}
