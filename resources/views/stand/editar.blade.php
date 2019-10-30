@extends('layouts.app')

@section('content')

<div class="wrapper-editor">
  
<div class="container my-4">
    <h1 class="display-4 white-text">Editar Stand {{$stand->idStand}} </h1>
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
     @endif

    <form action="{{route('stand.update',$stand->idStand)}}" method="POST">
        @method('PUT')
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
        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$stand->nombre}}">
        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{$stand->descripcion}}">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar</button>
    </form>
</div>
    
<br><br><br><br><br><br><br>
@endsection