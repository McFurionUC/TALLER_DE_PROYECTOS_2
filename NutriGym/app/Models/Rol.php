<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    //
    use HasFactory;

    protected $table = 'roles';
    protected $fillable = ['nombre_rol'];

    // Relación: un rol tiene muchos usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_rol');
    }
}
