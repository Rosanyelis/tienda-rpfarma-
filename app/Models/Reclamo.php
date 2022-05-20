<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Reclamo extends Model
{
    use HasFactory, UuidModel;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'user_id', 'codigo', 'name', 'comentario', 'tipo',
    ];

    /**
     * Obtiene los usuarios con el rol.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

     /**
     * Obtiene los subcategorias del producto.
     */
    public function mensajes()
    {
        return $this->hasMany(UserReclamo::class, 'reclamo_id', 'id');
    }
}
