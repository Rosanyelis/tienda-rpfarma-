<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class UserReclamo extends Model
{
    use HasFactory, UuidModel;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'reclamo_id', 'solicitud_id', 'user_id', 'mensaje',
    ];

    /**
     * Obtiene los usuarios con el rol.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Obtiene los usuarios con el rol.
     */
    public function reclamo()
    {
        return $this->belongsTo(Reclamo::class, 'reclamo_id', 'id');
    }
}
