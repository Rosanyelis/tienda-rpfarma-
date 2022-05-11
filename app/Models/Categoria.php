<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Categoria extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'name', 'estatus',
    ];

    /**
     * Obtiene datos de ficha tecnica.
     */
    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_id', 'id')->where('estatus', 'Activo');
    }

    /**
     * Obtener subcategorias.
     */
    public function subcategorias()
    {
        return $this->hasMany(Subcategoria::class, 'categoria_id', 'id')->orderBy('name');
    }
}
