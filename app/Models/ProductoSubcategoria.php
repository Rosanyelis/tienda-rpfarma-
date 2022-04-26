<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class ProductoSubcategoria extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'producto_id', 'subcategoria_id',
    ];

    /**
     * Obtiene la categoria del producto
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }

    /**
     * Obtiene la categoria del producto
     */
    public function subcategoria()
    {
        return $this->belongsTo(subcategoria::class, 'subcategoria_id', 'id');
    }
}
