<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComprobanteRenglon extends Model
{
    use HasFactory;

    protected $fillable = ['comprobanteCabecera_id','articulo_id','cantidad',];

    protected $hidden = ['created_at','updated_at'];

    //Relacion uno a muchos (inversa)
    public function comprobanteCabecera()
    {
        return $this->belongsTo('App\Models\ComprobanteCabecera');
    }

    //Relacion uno a uno (inversa)
    public function articulos()
    {
        return $this->belongsTo('App\Models\Articulo');
    }
}
