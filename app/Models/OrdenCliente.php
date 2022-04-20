<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class OrdenCliente extends Model
{
    use HasFactory, UuidModel;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'cliente_id', 'nro_orden', 'monto', 'direccion_compras', 'direccion_pedido', 'estatus',
    ];

    /**
     * Obtiene la categoria del producto
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }

    /**
     * Obtiene los detalles de la orden de compra
     */
    public function detallesCompra()
    {
        return $this->hasMany(DetallesOrden::class, 'orden_id', 'id');
    }

    /**
     * Obtiene las recetas adjuntadas al detalle de la compra
     */
    public function detallesCompraRecetas()
    {
        return $this->hasMany(OrdenReceta::class, 'orden_id', 'id');
    }
}
