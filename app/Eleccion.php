<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Eleccion extends Model
{
  //MODELO PARA EL MANEJO DE LAS ELECCIONES
  protected $table = 'ELECCION';

  //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
  public $timestamps = false;

  //DEFINIMOS PARAMETROS PARA PODER LLENAR
  protected $fillable = ['NOMBRE','ANIO', 'ID_PAIS'];
}
