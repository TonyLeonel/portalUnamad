<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'cv',
        'carrera_id',
        'imagen',
        'estado',
    ];
    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }
}

