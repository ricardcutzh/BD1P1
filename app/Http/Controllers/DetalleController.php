<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Municipio;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function show()
    {
      $detalles = DB::table('DETALLES_VOTOS')
                  ->join('ELECCION','ELECCION.ID_ELECCION','=','DETALLES_VOTOS.ID_ELECCION')
                  ->join('MUNICIPIO','MUNICIPIO.ID_MUNICIPIO','=','DETALLES_VOTOS.ID_MUNICIPIO')
                  ->join('PARTIDO','PARTIDO.ID_PARTIDO','=','DETALLES_VOTOS.ID_PARTIDO')
                  ->join('SEXO','SEXO.ID_SEXO','=','DETALLES_VOTOS.ID_SEXO')
                  ->join('ETNIA','ETNIA.ID_ETNIA','=','DETALLES_VOTOS.ID_ETNIA')
                  //->where('MUNICIPIO.ID_MUNICIPIO','=',20)
                  ->select('ELECCION.NOMBRE AS ELEC','MUNICIPIO.NOMBRE AS MUNI','SEXO.NOMBRE AS SEXO','ETNIA.NOMBRE AS ETNIA','DETALLES_VOTOS.TOTAL_N_PRIMARIO AS TP','DETALLES_VOTOS.TOTAL_N_MEDIO AS TM','DETALLES_VOTOS.TOTAL_N_UNIV AS TU','DETALLES_VOTOS.TOTAL_N_NAC AS TN')
                  ->paginate(100);
      return view('Detalle/show')->with(['detalles'=>$detalles]);
    }

    public function showEspecific(Municipio $municipio)
    {
      $detalles = DB::table('DETALLES_VOTOS')
                  ->join('ELECCION','ELECCION.ID_ELECCION','=','DETALLES_VOTOS.ID_ELECCION')
                  ->join('MUNICIPIO','MUNICIPIO.ID_MUNICIPIO','=','DETALLES_VOTOS.ID_MUNICIPIO')
                  ->join('PARTIDO','PARTIDO.ID_PARTIDO','=','DETALLES_VOTOS.ID_PARTIDO')
                  ->join('SEXO','SEXO.ID_SEXO','=','DETALLES_VOTOS.ID_SEXO')
                  ->join('ETNIA','ETNIA.ID_ETNIA','=','DETALLES_VOTOS.ID_ETNIA')
                  ->where('MUNICIPIO.ID_MUNICIPIO','=',$municipio->ID_MUNICIPIO)
                  ->select('ELECCION.NOMBRE AS ELEC','ELECCION.ANIO','SEXO.NOMBRE AS SEXO','ETNIA.NOMBRE AS ETNIA','DETALLES_VOTOS.TOTAL_N_PRIMARIO AS TP','DETALLES_VOTOS.TOTAL_N_MEDIO AS TM','DETALLES_VOTOS.TOTAL_N_UNIV AS TU','DETALLES_VOTOS.TOTAL_N_NAC AS TN')
                  ->paginate(30);
      return view('Detalle/esp')->with(['detalles'=>$detalles,'municipio'=>$municipio]);
    }
}
