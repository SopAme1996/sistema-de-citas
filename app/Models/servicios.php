<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    use HasFactory;

    protected $table = 'servicios';
    protected $primaryKey = 'idServicio';
    protected $guarded = ['idServicio'];
    protected $fillable = [
        'idUsuario',
        'nombre',
        'descripcion',
        'tiempo',
        'costo',
        'categoria',
        'imagen',
        'estatus',
    ];
}
