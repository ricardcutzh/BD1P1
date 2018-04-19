<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
  //MODELO PARA EL MANEJO DE LAS ELECCIONES
  protected $table = 'DETALLES_VOTOS';

  //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
  public $timestamps = false;

  //DEFINIMOS PARAMETROS PARA PODER LLENAR
  protected $fillable = ['ID_ELECCION','ID_MUNICIPIO','ID_PARTIDO','ID_PARTIDO','ID_SEXO','ID_ETNIA','TOTAL_N_PRIMARIO','TOTAL_N_MEDIO','TOTAL_N_UNIV', 'TOTAL_N_NAC'];
}
