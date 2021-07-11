<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComprobanteCabecera extends Model
{
    use HasFactory;

    protected $fillable = ['num_comprobante','tipo_operacion','fecha'];

    protected $hidden = ['created_at','updated_at'];

    //Relacion uno a muchos
    public function comprobanteRenglon()
    {
        return $this->hasMany('App\Models\ComprobanteRenglon');
    }
}
