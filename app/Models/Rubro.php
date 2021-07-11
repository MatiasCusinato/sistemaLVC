<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    //Relacion de Uno a Muchos
    public function articulos()
    {
        return $this->hasMany('App\Models\Articulo');
    }
}
