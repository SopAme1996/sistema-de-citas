<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colaboradores extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';
    protected $primaryKey = 'idColaborador';
    protected $guarded = ['idColaborador'];
    protected $fillable = [
        'idUsuario',
        'nombre',
        'ocupacion',
        'telefono',
        'correo',
        'estatus',
    ];
}
