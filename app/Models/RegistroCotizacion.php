<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroCotizacion extends Model
{
    use HasFactory;

    protected $table = 'registro_cotizaciones';
    public $timestamps = false;
    protected $primaryKey = 'id_registro';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_registro', 'mail', 'adquiriente', 'mayor_edad', 'terminos', 'domicilio', 'nombre', 'telefono', 'mensaje', 'imagen', 'precio', 'precio_base', 'precio_despacho', 'tiempo_despacho', 'estado',
        'direccion', 'rpfarma_sucursal', 'asociado_sucursal', 'comunadespacho', 'direcciondespacho',
        'referencia', 'temperatura_entrega', 'fecha_creacion',
    ];

    /**
     * Obtiene los usuarios con el rol.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
