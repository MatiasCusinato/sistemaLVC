<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','codigo','descripcion','cantidad','precio','fecha_vencimiento','stock_min','stock_max','rubro_id',];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relacion uno a muchos (inversa) 
    public function rubro()
    {
        return $this->belongsTo('App\Models\Rubro');
    }
    
    //Relacion uno a uno 
    public function comprobanteRenglon()
    {
        return $this->hasOne('App\Models\ComprobanteRenglon');
    }
}
