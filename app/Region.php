<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  //LLAVE DE LA REGION
  protected $primaryKey = "ID_REGION";

  //MODELO PARA EL MANEJO DE LAS REGIONES
  protected $table = 'REGION';

  //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
  public $timestamps = false;

  //DEFINIMOS PARAMETROS PARA PODER LLENAR
  protected $fillable = ['NOMBRE','ID_PAIS'];


}
