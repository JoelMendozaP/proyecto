<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\feria;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarioId=auth()->user()->id;
        $feria = feria::where('idUsuario',$usuarioId)->paginate(5);
        //$feria = App\feria::paginate(5);
        return view('home',compact('feria'));
    }
    public function feria()
    {
        return view('ferias.fAgregar');
    }
    public function editar($id)
    {
        $feria = App\feria::findOrFail($id);
        $duracion=App\Duracion::findOrFail($feria->idDuracion);
        $localizacion = App\Localizacion::findOrFail($feria->idLocalizacion);
        return view('ferias.editar', compact('feria','duracion','localizacion'));
    }
    public function update(Request $request, $idF){
        
        $feriaNueva = App\feria::findOrFail($idF);
        $duracionNueva =App\Duracion::findOrFail($feriaNueva->idDuracion);
        $LocNueva = App\Localizacion::findOrFail($feriaNueva->idLocalizacion);
        
        $LocNueva->longitud = $request->lat;
        $LocNueva->latitud = $request->lng;
        $LocNueva->save();
        
        $duracionNueva->fechaInicio = $request->fechaInicio;
        $duracionNueva->horaInicio = $request->HraInicio;
        $duracionNueva->fechaFin = $request->fechaFin;
        $duracionNueva->horaFIn = $request->HraFin;
        $duracionNueva->save();

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

        return back()->with('mensaje','Feria Actualizada');
    }
    public function eliminar($id){
        $feriaNueva = App\feria::findOrFail($id);
        $duracionNueva =App\Duracion::findOrFail($feriaNueva->idDuracion);
        $LocNueva = App\Localizacion::findOrFail($feriaNueva->idLocalizacion);
    
        $feriaNueva->delete();
        $duracionNueva->delete();
        $LocNueva->delete();
        

        return back()->with('mensaje','Feria Eliminada');
    }
}
