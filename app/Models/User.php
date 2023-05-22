<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $appends = ['alias'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni', 'nombre', 'apaterno', 'amaterno', 'telefono', 'direccion', 'email', 'password', 'tipo', 'estado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAliasAttribute()
    {
        $n = strtoupper(substr(trim($this->nombre),0,1));
        $p = strtoupper(trim($this->apaterno));        
        return $n.". ".$p;
    } 

    /*public function identidad_documento()
    {
        return $this->belongsTo(Identidad_documento::class, 'identidad_documento_id');
    }*/

    public function permisos()
    {
        return $this->hasMany(Permiso::class, 'user_id');
    }
}
