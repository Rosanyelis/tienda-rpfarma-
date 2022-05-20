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
        'id', 'user_id', 'nombre', 'apellido', 'rut', 'correo', 'direccion', 'estatus',
    ];

    /**
     * Obtiene las ordenes de compra.
     */
    public function ordenes()
    {
        return $this->hasMany(OrdenCliente::class, 'cliente_id', 'id');
    }

    /**
     * Obtiene los usuarios con el rol.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
