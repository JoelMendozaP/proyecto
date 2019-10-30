@extends('layouts.app')

@section('content')

<div class="wrapper-editor">

    
  
<div class="container my-4">
    <h1 class="display-4 white-text">Stands</h1>
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
     @endif
    <form action="{{route('stand.crear')}}" method="POST">
        @csrf
        @if (count($errors)>0) 
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
         @endif
        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{old('nombre')}}">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar</button>
    </form>

    <table class="table table-dark text-center">
        <thead>
          <tr>
            <th scope="col"><h5>#Stand</h5></th>
            <th scope="col"><h5>Nombre</h5></th>
            <th scope="col"><h5>Descripcion</h5></th>
            <th scope="col"><h5>Acciones</h5></th>
          </tr>
        </thead>
        <tbody>
            @foreach($stand as $item)
            <tr>
                <th scope="row">{{$item->nroStand}}</th>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>
                        <a href="{{route('stand.editar', $item)}}" class="btn btn-rounded text-white blue darken-3 btn-sm"><i class="fas fa-toggle-off"></i></a>
                        <form action="{{route('stand.eliminar', $item)}}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-rounded text-white red btn-sm remove-first-tr" type="submit"> <i class="fas fa-eraser"></i></button>
                        </form>
                            {{-- <button class=" btn btn-rounded text-white purple lighten-2 btn-sm add-new-row" type="button"><i class="fas fa-plus"></i></button> --}}
                    </td>
            </tr>
            @endforeach()
        </tbody>
      </table>
      {{$stand->links()}}

</div>
    
<br><br><br><br><br><br><br>
@endsection