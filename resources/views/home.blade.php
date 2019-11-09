@extends('layouts.app')

@section('content')
<div class="mask rgba-orange-slight d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <!-- textos responsives -->
            <div class="col-sm-12">
                    <div class="card">
                            <div class="card-body">
                              <h3 class="text-center orange-text" ><b>Tus ferias</b></h3>
                              <a href="{{route('feria')}}" class=" btn btn-rounded text-white purple lighten-2 btn-sm rounded-pill ">Agregar   <i class="fas fa-plus"></i></a>
                              <hr>
                              @if (session('mensaje'))
                                <div class="alert alert-success">
                                  {{session('mensaje')}}
                                </div>
                              @endif
                              
                              <div class="table-responsive overflow-auto ">
                              <table class="table table-hover table-condensed table-sm">
                                <thead class="thead-dark ">
                                  <tr>
                                    <th class="orange-text" scope="col"><h5>#</h5></th>
                                    <th scope="col"><h6>Nombre</h6></th>
                                    <th scope="col"><h6>Objetivo</h6></th>
                                    <th scope="col"><h6>Descripcion</h6></th>
                                    <th class="text-center" scope="col"><h6>Accion</h6></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feria as $item)
                                    <tr>
                                            <th class="align-middle"scope="row">{{$item->idFeria}}</th>
                                            <td class="align-middle">{{$item->nombre}}</td>
                                            <td class="align-middle">{{$item->objetivo}}</td>
                                            <td class="align-middle">{{$item->descripcion}}</td>
                                            <td class="text-center">
                                              <a href="{{route('feria.editar', $item)}}" class="btn btn-rounded text-white blue darken-3 btn-sm rounded-pill">Ediar <i class="fas fa-toggle-off"></i></a>
                                              <form action="{{route('feria.eliminar', $item)}}" method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-rounded text-white red btn-sm remove-first-tr rounded-pill" type="submit">Eliminar <i class="fas fa-eraser"></i></button>
                                            </form>
                                            <a href="{{route('feria.editar', $item)}}" class="btn btn-rounded text-white purple lighten-2 btn-sm rounded-pill">Stands <i class="fas fa-toggle-off"></i></a>
                                            </td>
                                          </tr> 
                                    @endforeach
                                </tbody>
                              </table>
                              {{$feria->links()}}
                            </div>
                            </div>
                          </div>
                          
            </div>
          </div>
    </div>          
  </div>
<br><br><br><br><br><br><br>
@endsection
