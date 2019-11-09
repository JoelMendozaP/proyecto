@extends('layouts.app')

@section('content')
<div class="mask rgba-orange-slight d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <!-- textos responsives -->
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                    <div class="card">
                            <div class="card-body">
                              <h3 class="text-center orange-text" ><b>Editar Feria</b></h3>
                              <hr>
                              <!-- formulario -->
                                <!-- Extended material form grid -->
                                    <form action="{{route('ferias.update',$feria->idFeria)}}" method="POST">
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
                                        @if (session('mensaje'))
                                            <div class="alert alert-success">
                                                {{session('mensaje')}}
                                            </div>
                                        @endif
                                        
                                        <!-- Grid row -->
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                        <!-- Material input -->
                                                        <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="nombre" value="{{$feria->nombre}}">
                                                        <label class="active">Nombre de la feria</label>
                                                        </div>
                                                    </div>    
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="date" class="form-control" name="fechaInicio" value="{{$duracion->fechaInicio}}">
                                            <label>Fecha de Inicio</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                    
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="date" class="form-control" name="fechaFin" value="{{$duracion->fechaFin}}">
                                            <label for="inputPassword4MD">Fecha de Fin</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="time" class="form-control" name="HraInicio" value="{{$duracion->horaInicio}}">
                                            <label for="inputPassword4MD">Hora Inicio</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="time" class="form-control" name="HraFin" value="{{$duracion->horaFIn}}">
                                            <label for="inputPassword4MD">Hora de Fin</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                        </div>
                                        <!-- Grid row -->
                                    
                                        <!-- Grid row -->
                                        <div class="row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="Ciudad" value="{{$feria->ciudad}}">
                                            <label class="active" for="inputAddressMD">Ciudad</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="Localidad" value="{{$feria->localidad}}">
                                            <label class="active" for="inputAddressMD">Localidad</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="Calle" value="{{$feria->calle}}">
                                            <label class="active" for="inputAddressMD">Calle o Av.</label>
                                            </div>
                                        </div>

                                        
                                        <!-- Grid column -->
                                    
                                        <!-- Grid column -->
                                        <div class="col-md-12">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="descripcion" value="{{$feria->descripcion}}">
                                            <label class="active" for="inputAddress2MD">Descripcion de la feria</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="objetivo" value="{{$feria->objetivo}}">
                                            <label class="active" for="inputAddress2MD">Objetivo</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                        </div>
                                        <!-- Grid row -->
                                    
                                        <!-- Grid row -->
                                        <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="number" class="form-control" name="nroStad" value="{{$feria->cantStand}}">
                                            <label class="active" for="inputCityMD">Cantidad de Stands</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                    
                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="telefono" value="{{$feria->telefono}}">
                                            <label class="active" for="inputZipMD">Numero de Referencia</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                        </div>
                                        <!-- Grid row -->
                                        <div class="form-row text-center">
                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                        <button type="submit" class="btn orange-gradient btn-orange btn-block  my-4">Editar</button>
                                        </div>
                                        <div class="col-md-6 text-right ">
                                            <br> 
                                            <a class="btn-floating btn-lg btn-default" data-toggle="modal" data-target=".bd-example-modal-lg "> <i class="fas fa-map-marked-alt"></i></a>
                                            <!-- Central Modal Medium Danger -->
                                            <div class="modal fade bd-example-modal-lg" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-notify modal-danger" role="document">
                                            <!--Content-->
                                            <div class="modal-content">
                                                <!--Header-->
                                                <div class="modal-header">
                                                <p class="heading lead">Editar Ubicacion</p>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                                                </div>

                                                <!--Body-->
                                                <div class="modal-body"  id="map" style="width: 100%; height: 500px">
                                                
                                                </div>
                                                
                                                <!--Footer-->
                                                <form action="" method="POST">
                                                    @csrf
                                                    <input type="text" id="lat" name="lat" value="{{$localizacion->latitud}}"/> 
                                                    <input type="text" id="lng" name="lng" value="{{$localizacion->longitud}}"/>
                                                    <div class="modal-footer justify-content-center">

                                                    <button type="button" class="btn btn-danger btn-block  my-4" data-dismiss="modal">Registrar</button>
                                                    {{-- <a type="button" class="btn btn-danger waves-effect my-4" data-dismiss="modal">No, thanks</a> --}}
                                                </form>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </form>
                                  <!-- Extended material form grid -->  
                            </div>
                          </div>
            </div>
            <div class="col-sm-3"></div>
          </div>
    </div>          
  </div>
<br><br><br><br><br><br><br>
@endsection