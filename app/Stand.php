<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    
    protected $table='stand';

    protected $primaryKey='idStand';
    public $timestamps=false;

    protected $fillable =[
        'nroStand',
        'nombre',
        'descripcion',
        'idFeria'        
    ];
    
}
