<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    use HasFactory;

    protected $fillable = [
        'pagina_categoria_id', 'flag', 'titulo', 'block', 'fondo', 'contenido', 'estado', 'user_id','menu_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(Pagina_categoria::class, 'pagina_categoria_id');
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
