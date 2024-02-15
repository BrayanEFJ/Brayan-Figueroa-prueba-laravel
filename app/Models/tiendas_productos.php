<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class tiendas_productos extends Model
{
    protected $table = 'tiendas_productos';
    public $timestamps= false;

    protected $fillable = [
        'id',
        'compra_maxima',
        'valor',
        'id_promocion',
        'id_tienda',
        'id_producto',
    ];




}
