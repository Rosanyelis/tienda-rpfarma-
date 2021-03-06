<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class DetallesOrden extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'orden_id', 'producto_id', 'sku', 'cantidad', 'precio', 'url_receta',
    ];

    /**
     * la orden de compra
     */
    public function orden()
    {
        return $this->belongsTo(OrdenCliente::class, 'orden_id', 'id');
    }
    /**
     * la orden de compra
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }
}
