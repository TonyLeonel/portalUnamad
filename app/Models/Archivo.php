<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'carpeta_id', 'nombre', 'alias', 'enlace', 'destacado', 'estado'
    ];

    public function carpeta()
    {
        return $this->belongsTo(Carpeta::class, 'carpeta_id');
    }

}
