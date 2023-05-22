<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'menu_id',
        'posicion',
        'estado',
        'flag',
    ];

    public function categorias()
    {
        return $this->hasMany(Pagina_categoria::class, 'menu_id');
    }
    public function paginas()
    {
        return $this->hasMany(Pagina::class, 'menu_id');
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
