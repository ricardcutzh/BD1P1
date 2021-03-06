<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
  //LLAVE PRIMARIA DE TABLA
  protected $primaryKey = "ID_SEXO";

  //MODELO PARA EL MANEJO DE LOS SEXOS
  protected $table = 'SEXO';

  //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
  public $timestamps = false;

  //DEFINIMOS PARAMETROS PARA PODER LLENAR
  protected $fillable = ['NOMBRE'];
}
