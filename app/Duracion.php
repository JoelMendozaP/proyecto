<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duracion extends Model
{
    protected $table='duracion';

    protected $primaryKey='idDuracion';
    public $timestamps=false;

				
    protected $fillable =[
        'fechaInicio',
        'horaInicio',
        'fechaFin',
        'horaFIn'    
    ];
}
