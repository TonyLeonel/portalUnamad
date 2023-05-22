<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion_categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'estado'
    ];

    public function publicaciones()
    {
        return $this->hasMany(Publicacion::class, 'publicacion_categoria_id');
    }

}


