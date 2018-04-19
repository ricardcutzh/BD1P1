<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //MODELO PARA EL MANEJO DE LOS USUARIOS
    protected $table = 'USUARIO';

    //PORQUE MI TABLA POR DEFECTO NO TIENE TIMESTAMPS
    public $timestamps = false;

    //DEFINIMOS PARAMETROS PARA PODER LLENAR
    protected $fillable = ['NOMBRE', 'PASSW'];

    
}
