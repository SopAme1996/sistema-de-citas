<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citas extends Model
{
    use HasFactory;
    protected $table = 'citas';
    protected $primaryKey = 'idCita';
    protected $guarded = ['idCita'];
    protected $fillable = [
        'idUsuario',
        'idSucursal',
        'idColaborador',
        'idServicio',
        'fecha',
        'hora',
        'nombre',
        'apelliddo',
        'correo',
        'telefono',
        'estatus',
    ];
}
