<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagina_categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'estado','menu_id',
        'pagina_categorias_id',
        'posicion',
        'flag',
        'fuente',
    ];

    public function paginas()
    {
        return $this->hasMany(Pagina::class, 'pagina_categoria_id');
    }
    public function categorias()
    {
        return $this->hasMany(Pagina_categoria::class, 'pagina_categorias_id');
    }
}
