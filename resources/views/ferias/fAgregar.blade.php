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
                              <h3 class="text-center orange-text" ><b>Registrar Feria</b></h3>
                              <a href="{{route('home')}}" class=" btn btn-rounded text-white purple lighten-2 btn-sm rounded-pill ">Tus Ferias   <i class="fas fa-plus"></i></a>
                              <hr>
                                
                              <!-- formulario -->
                                <!-- Extended material form grid -->
                                    <form action="{{route('ferias.store')}}" method="POST">
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
                                                        <input type="text" class="form-control" name="nombre">
                                                        <label>Nombre de la feria</label>
                                                        </div>
                                                    </div>    
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="date" class="form-control" name="fechaInicio">
                                            <label>Fecha de Inicio</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                    
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="date" class="form-control" name="fechaFin">
                                            <label for="inputPassword4MD">Fecha de Fin</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="time" value="08:00" class="form-control" name="HraInicio">
                                            <label for="inputPassword4MD">Hora Inicio</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="time" value="18:00" class="form-control" name="HraFin">
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
                                            <input type="text" class="form-control" name="Ciudad">
                                            <label for="inputAddressMD">Ciudad</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="Localidad">
                                            <label for="inputAddressMD">Localidad</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="Calle">
                                            <label for="inputAddressMD">Calle o Av.</label>
                                            </div>
                                        </div>

                                        
                                        <!-- Grid column -->
                                    
                                        <!-- Grid column -->
                                        <div class="col-md-12">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="descripcion">
                                            <label for="inputAddress2MD">Descripcion de la feria</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="objetivo">
                                            <label for="inputAddress2MD">Objetivo</label>
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
                                            <input type="number" class="form-control" name="nroStad">
                                            <label for="inputCityMD">Cantidad de Stands</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                    
                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="telefono">
                                            <label for="inputZipMD">Numero de Referencia</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                        </div>
                                        <!-- Grid row -->
                                        <div class="form-row text-center">
                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                        <button type="submit" class="btn orange-gradient btn-orange btn-block  my-4">Registrar</button>
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
                                                <p class="heading lead">Agregar Ubicacion</p>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                                                </div>
                                                
                                                <!--Body-->
                                                <div class="modal-body"  id="map" style="width: 100%; height: 500px">
                                                </div>
                                                
                                                <!--Footer-->
                                                <form  action="" method="POST">
                                                    @csrf
                                                    <input class="invisible" type="text" id="lat" name="lat" /> 
                                                    <input class="invisible" type="text" id="lng" name="lng" />
                                                    <div class="modal-footer justify-content-center">

                                                    <button type="button" class="btn btn-danger btn-block  my-4" data-dismiss="modal">Registrar</button>
                                                    {{-- <a type="button" class="btn btn-danger waves-effect my-4" data-dismiss="modal">No, thanks</a> --}}
                                                </form>
                                                <script>
                                                    var marker;          
                                                    var coords = {};    
                                                    initMap = function () 
                                                    {
                                                    
                                                            navigator.geolocation.getCurrentPosition(
                                                              function (position){
                                                                coords =  {
                                                                  lng: position.coords.longitude,
                                                                  lat: position.coords.latitude
                                                                };
                                                                setMapa(coords);
                                                                
                                                               
                                                              },function(error){console.log(error);});
                                                        
                                                    }
                                                       
                                                    
                                                    function setMapa (coords)
                                                    {   
                                                          var map = new google.maps.Map(document.getElementById('map'),
                                                          {
                                                            zoom: 13,
                                                            center:new google.maps.LatLng(coords.lat,coords.lng),
                                                    
                                                          });
                                                    
                                                          marker = new google.maps.Marker({
                                                            map: map,
                                                            draggable: true,
                                                            animation: google.maps.Animation.DROP,
                                                            position: new google.maps.LatLng(coords.lat,coords.lng),
                                                    
                                                          });
                                                          marker.addListener('click', toggleBounce);
                                                          
                                                          marker.addListener( 'dragend', function (event)
                                                          {
                                                            document.getElementById("lat").value = this.getPosition().lat();
                                                            document.getElementById("lng").value = this.getPosition().lng();
                                                          });
                                                        }
                                                        function toggleBounce() {
                                                        if (marker.getAnimation() !== null) {
                                                            marker.setAnimation(null);
                                                        } else {
                                                            marker.setAnimation(google.maps.Animation.BOUNCE);
                                                        }
                                                        }
                                                    </script>
                                                  <script async defer
                                                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8v_BEnHy5oPO_t9D6IMjmrPiiye2Nyak&callback=initMap">
                                                  </script>
                                                
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