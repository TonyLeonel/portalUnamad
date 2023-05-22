<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    use HasFactory;

    protected $fillable = [
        'comunicado_categoria_id', 'titulo', 'imagen', 'contenido', 'duracion', 'fecha_fin', 'estado', 'user_id'
    ];

    protected $dates = [ 'fecha_fin' ];

    public function categoria()
    {
        return $this->belongsTo(Comunicado_categoria::class, 'comunicado_categoria_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
