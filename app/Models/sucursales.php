<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sucursales extends Model
{
    use HasFactory;

    protected $table = 'sucursales';
    protected $primaryKey = 'idSucursal';
    protected $guarded = ['idSucursal'];
    protected $fillable = [
        'idUsuario',
        'nombre',
        'direccion',
        'estado',
        'pais',
        'estatus',
    ];


}
