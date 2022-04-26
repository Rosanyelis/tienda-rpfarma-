<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Subcategoria extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'categoria_id', 'name', 'estatus',
    ];

    /**
     * Obtener categoria.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    /**
     * Obtiene los subcategorias del producto.
     */
    public function productos()
    {
        return $this->hasMany(ProductoSubcategoria::class, 'subcategoria_id', 'id');
    }
}
