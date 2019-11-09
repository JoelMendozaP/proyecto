<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Feria;
use App\Duracion;
use App\Localizacion;
use App;
use App\Http\Request\FeriaFormRequest;
use DB;

class FeriaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function const(FeriaFormRequest $request){
        $feria=new Feria;
        $feria->nombre=$request->get('nombre');
        $feria->descripcion=$request->get('descripcion');
        $feria->objetivo=$request->get('objetivo');
        $feria->save();
    }
    public function store(Request $request)
    {
        //return $request->all();
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'objetivo' => 'required',
        ]);
        $duracionNueva = new App\Duracion;
        $duracionNueva->fechaInicio = $request->fechaInicio;
        $duracionNueva->horaInicio = $request->HraInicio;
        $duracionNueva->fechaFin = $request->fechaFin;
        $duracionNueva->horaFIn = $request->HraFin;
        $duracionNueva->save();

        $LocNueva = new App\Localizacion;
        $LocNueva->longitud = $request->lat;
        $LocNueva->latitud = $request->lng;
        $LocNueva->save();

        $feriaNueva = new App\Feria;
        $feriaNueva->nombre = $request->nombre;
        $feriaNueva->descripcion = $request->descripcion;
        $feriaNueva->objetivo = $request->objetivo;
        $feriaNueva->cantStand = $request->nroStad;
        $feriaNueva->telefono = $request->telefono;
        $feriaNueva->idUsuario = auth()->user()->id;
        $feriaNueva->ciudad = $request->Ciudad;
        $feriaNueva->localidad = $request->Localidad;
        $feriaNueva->calle = $request->Calle;
        $feriaNueva->idDuracion = $duracionNueva->idDuracion;
        $feriaNueva->idLocalizacion = $LocNueva->idLocalizacion;
        $feriaNueva->save();

        //return redirect()->route('stand', ['id' => 1]);
        //return Redirect::to('/stand');

        //$stand = App\Stand::paginate(5);
        //return view('stand',compact('stand'));
        //return view(route('stand', $feriaNueva));
        //return back();
        return back()->with('mensaje','Feria Agregada');
        //$stand = App\Stand::paginate(2);
        //return view(route('stand', $feriaNueva));
    }
    
}

