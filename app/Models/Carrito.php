<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Carrito extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'codigo', 'producto_id', 'producto_name', 'producto_foto', 'urlshow',
        'producto_tipoventa', 'cantidad', 'precio',
    ];
}
