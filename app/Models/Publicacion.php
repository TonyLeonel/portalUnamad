<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $table = 'publicaciones';

    protected $fillable = [
        'publicacion_categoria_id', 'titulo', 'resumen', 'imagen', 'contenido', 'estado', 'user_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(Publicacion_categoria::class, 'publicacion_categoria_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
