<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizacion extends Model
{
    protected $table='localizacion';

    protected $primaryKey='idLocalizacion';
    public $timestamps=false;

    protected $fillable =[
        'longitud',
        'latitud'   
    ];
    		
}
