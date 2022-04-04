<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class FichaTecnica extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'producto_id', 'principio_activo', 'forma_farmaceutica','condiciones_almacenamiento','registro_sanitario',
        'condicion_venta','indicaciones','advertencias', 'contraindicaciones', 'estatus',
    ];

    /**
     * Obtiene el producto
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }
}
