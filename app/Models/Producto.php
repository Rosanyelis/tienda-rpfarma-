<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Producto extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'categoria_id', 'sku', 'name', 'informacion', 'foto', 'stock', 'precio_venta', 'estatus',
    ];

    /**
     * Obtiene datos de ficha tecnica.
     */
    public function ficha()
    {
        return $this->hasOne(FichaTecnica::class, 'producto_id', 'id');
    }

    /**
     * Obtiene la categoria del producto
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    /**
     * Obtiene los subcategorias del producto.
     */
    public function subcategorias()
    {
        return $this->hasMany(ProductoSubcategoria::class, 'producto_id', 'id');
    }

    /**
     * Obtiene los subcategorias del producto.
     */
    public function detallesorden()
    {
        return $this->hasMany(DetallesOrden::class, 'producto_id', 'id');
    }

    // Query Scopes
    // public function ScopeName($query, $name)
    // {
    //     if ($name) {
    //         return $query->where('name', 'LIKE', "%$name%");
    //     }
    // }
    // public function ScopeComponente($query, $name)
    // {
    //     if ($name) {
    //         return $query->where('principio_activo', 'LIKE', "%$name%");
    //     }
    // }
}
