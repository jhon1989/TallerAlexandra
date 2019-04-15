<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    protected $table = 'prestamos';

    protected $fillable = [
        'idCliente',
        'nombreCliente',
        'valorPrestamo',
        'porInteres',
        'idPrestador',
        'nombrePrestador',
        'cuotas',
        'frecuenciaPago',
        'sucursal',
        ];
}
