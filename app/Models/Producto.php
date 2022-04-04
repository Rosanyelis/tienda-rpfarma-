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
     * Obtiene los comentarios del producto.
     */
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'producto_id', 'id');
    }


}
