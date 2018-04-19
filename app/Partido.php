<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
  //MODELO PARA EL MANEJO DE LOS DPARTIDOS
  protected $table = 'PARTIDO';

  //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
  public $timestamps = false;

  //DEFINIMOS PARAMETROS PARA PODER LLENAR
  protected $fillable = ['NOMBRE','INICIALES', 'ID_PAIS'];
}
