<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class FichaTecnica extends Model
{
    use HasFactory, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'producto_id',
        'condicion_venta_id',
        'tipo_administracion_id',
        'laboratorio_id',
        'forma_farmaceutica_id',
        'principio_activo',
        'condiciones_almacenamiento',
        'registro_sanitario',
        'dosis_farmaceutica',
        'contenido',
        'precio_fraccionario',
        'posologia',
        'indicaciones',
        'advertencias',
        'contraindicaciones',
        'estatus',
    ];

    /**
     * Obtiene el producto
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id', 'id');
    }

    /**
     * Obtiene la condicion de venta
     */
    public function condicionventa()
    {
        return $this->belongsTo(CondicionVenta::class, 'condicion_venta_id', 'id');
    }

    /**
     * Obtiene el producto
     */
    public function tipoadministracion()
    {
        return $this->belongsTo(TipoAdministracion::class, 'tipo_administracion_id', 'id');
    }

    /**
     * Obtiene el producto
     */
    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class, 'laboratorio_id', 'id');
    }

    /**
     * Obtiene el producto
     */
    public function formafarmaceutica()
    {
        return $this->belongsTo(FormaFarmaceutica::class, 'forma_farmaceutica_id', 'id');
    }


}
