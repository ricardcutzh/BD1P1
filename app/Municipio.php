<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
  //DEFINIENDO LA  LLAVE PRIMARA
  protected $primaryKey = "ID_MUNICIPIO";
  //MODELO PARA EL MANEJO DE LOS DEPARTAMENTOS
  protected $table = 'MUNICIPIO';

  //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
  public $timestamps = false;

  //DEFINIMOS PARAMETROS PARA PODER LLENAR
  protected $fillable = ['NOMBRE','ID_DEPARTAMENTO'];
}
