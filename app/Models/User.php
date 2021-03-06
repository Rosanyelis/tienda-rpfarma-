<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\UuidModel;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'rol_id', 'estatus',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Obtiene los usuarios con el rol.
     */
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id', 'id');
    }

     /**
     * Obtiene datos de ficha tecnica.
     */
    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'user_id', 'id');
    }

    /**
     * Obtiene datos de recetas magistrales solicitadas.
     */
    public function cotizaciones()
    {
        return $this->hasMany(RegistroCotizacion::class, 'user_id', 'id');
    }
}
