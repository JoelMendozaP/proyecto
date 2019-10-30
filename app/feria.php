<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feria extends Model
{
    protected $table='feria';

    protected $primaryKey='idFeria';
    public $timestamps=false;

    protected $fillable =[
        'nombre',
        'idUsuario',
        'objetivo',
        'descripcion',
        'cantStand',
        'telefono',
        'ciudad',
        'localidad',
        'calle'        
    ];

}
