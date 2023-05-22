<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'web',
        'vision',
        'mision',
        'objetivo',
        'perfil',
        'imagen',
        'mall',
        'facultad_id',
        'descripcion',
        'abreviatura',
        'telefono',
        'correo',
        'direccion',
        'facebook',
        'whatsapp',
    ];
    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'facultad_id');
    }
}
