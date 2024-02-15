<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = 'productos';
    public $timestamps= false;

    protected $fillable = [
        'id',
        'estado',
        'kit',
        'barcode',
        'nombre',
        'presentacion',
        'descripcion',
        'foto',
        'peso',
    ];
}
