<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //DEFINIENDO LA LLAV PRIMARIA DEL PAIS
    protected $primaryKey = "ID_PAIS";

    //MODELO PARA EL MANEJO DE LOS USUARIOS
    protected $table = 'PAIS';

    //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
    public $timestamps = false;

    //DEFINIMOS PARAMETROS PARA PODER LLENAR
    protected $fillable = ['NOMBRE'];


}
