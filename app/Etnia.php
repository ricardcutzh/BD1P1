<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Etnia extends Model
{
  //DEFINIENDO LA LLAVE PRIMARIA
  protected $primaryKey = "ID_ETNIA";

  //MODELO PARA EL MANEJO DE LOS SEXOS
  protected $table = 'ETNIA';

  //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
  public $timestamps = false;

  //DEFINIMOS PARAMETROS PARA PODER LLENAR
  protected $fillable = ['NOMBRE'];
}
