<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class StandController extends Controller
{
    /* public function __construct(){
        $this->middleware('auth');
    } */
    public function inicio(){
        $stand = App\Stand::paginate(2);
        return view('stand.stand',compact('stand'));
    }
    public function Stand(){
        return view('stand');
    }
    public function crear(Request $request){
        //return $request->all();
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        $standN = new App\Stand;
        $standN->nombre =$request->nombre;
        $standN->descripcion =$request->descripcion;
        $standN->save();
        return back()->with('mensaje','Stand Agregado');
    }
    public function editar($id){
        $stand = App\Stand::findOrFail($id);
        return view('stand.editar',compact('stand'));
    }
    public function update(Request $request, $id){
        $standUp = App\Stand::findOrFail($id);
        $standUp->nombre =$request->nombre;
        $standUp->descripcion =$request->descripcion;
        $standUp->save();
        return back()->with('mensaje','Stand Actualizada');
    }
    public function eliminar($id){
        $standD = App\Stand::findOrFail($id);
        $standD->delete();
        return back()->with('mensaje','Stand Eliminada');
    }
}
