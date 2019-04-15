<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        "descripcion",
        "codigo",
        "precio",
        "marca",
        "referencia",
        "estado",
        "sucursal",
        ];
}
