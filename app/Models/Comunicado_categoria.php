<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado_categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'estado'
    ];

    public function comunicados()
    {
        return $this->hasMany(Comunicado::class, 'comunicado_categoria_id');
    }
}
