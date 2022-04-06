<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidModel;

class Laboratorio extends Model
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
    public function ficha()
    {
        return $this->hasOne(FichaTecnica::class, 'laboratorio_id', 'id');
    }
}
