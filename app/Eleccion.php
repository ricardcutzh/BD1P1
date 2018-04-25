<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Eleccion extends Model
{
  //LLAVE DE LA TABLA
  protected $primaryKey = "ID_ELECCION";
  
  //MODELO PARA EL MANEJO DE LAS ELECCIONES
  protected $table = 'ELECCION';

  //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
  public $timestamps = false;

  //DEFINIMOS PARAMETROS PARA PODER LLENAR
  protected $fillable = ['NOMBRE','ANIO', 'ID_PAIS'];
}
