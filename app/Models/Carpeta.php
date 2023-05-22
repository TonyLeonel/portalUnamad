<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carpeta extends Model
{
    use HasFactory;

    protected $fillable = [
        'carpeta_id', 'nombre', 'alias', 'ubicacion', 'estado'
    ];

    public function padre()
    {
        return $this->belongsTo(Carpeta::class, 'carpeta_id');
    }

    public function subcarpetas()
    {
        return $this->hasMany(Carpeta::class, 'carpeta_id');
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class, 'carpeta_id');
    }

}
