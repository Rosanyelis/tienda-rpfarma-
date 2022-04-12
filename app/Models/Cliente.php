<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Cliente extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'nombre', 'apellido', 'rut', 'direccion', 'estatus',
    ];

    /**
     * Obtiene las ordenes de compra.
     */
    public function ordenes()
    {
        return $this->hasMany(OrdenCliente::class, 'cliente_id', 'id');
    }
}
