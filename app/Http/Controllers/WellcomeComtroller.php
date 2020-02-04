<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class WellcomeComtroller extends Controller
{
    public function inicio(){
        $feria = App\feria::all();
        $duracion =App\Duracion::all();
        $localizacion = App\Localizacion::all();
        return view('welcome',compact('feria','duracion','localizacion'));
    }
}
