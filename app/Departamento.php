<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  //ID DE LA TABLA
  protected $primaryKey = "ID_DEPARTAMENTO";
  //MODELO PARA EL MANEJO DE LOS DEPARTAMENTOS
  protected $table = 'DEPARTAMENTO';

  //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
  public $timestamps = false;

  //DEFINIMOS PARAMETROS PARA PODER LLENAR
  protected $fillable = ['NOMBRE','ID_REGION'];


}
