@extends('plantilla')
@section('body')
<nav class="navbar navbar-expand-md navbar-dark gris scrolling-navbar fixed-top">
        <div class="container" >
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <img src="img/logotipo.png" class="img-fluid" style="width: 122px" >
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link mx-2">¿Quienes Somos?</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="nav-link mx-2" style="color: rgba(0,64,109)"><strong>Home</strong></a>
                        @else
                            <li class="nav-item active">
                                <a class="nav-link mx-2" style="color: rgba(0,64,109)" href="{{ route('login') }}"><strong>Iniciar sesion</strong></a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link mx-2" style="color: rgba(0,64,109)" href="{{ route('register') }}"><strong>Registrarse</strong></a>
                            </li>
                            @endif
                        @endauth
                    @endif
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                                <i class="fab fa-facebook-f" style="color: rgba(0,64,109)"></i>
                        </a>
                        </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fab fa-twitter" style="color: rgba(0,64,109)"></i>
                                </a>
                        </li>
                </ul>
                </div>
        </div>        
</nav>
    <section>
         <article class="caja">
                <div class="mask rgba-orange-slight d-flex justify-content-center align-items-center">
                        <div class="container">
          
                             <div class="row">
                              <!-- textos responsives -->
                              <div class="col-sm-2"></div>
                                <div class="col-sm-8 text-center text-white ">
                                      <br>
                                      <br>
                                      <br>
                                      <br>
                                    <H3 class="">FERIAS EN LA PAZ BOLIVIA</H3>
                                    <img src="img/hola.png" class="rounded mx-auto d-block">
                                    <H1>ES <strong>GENIAL</strong> QUE NOS VISITES</H1>
                                    <h5 class="">Bienvenido/a a nuestra página web nuestro hogar en el mundo digital.</h5>
                                    <h5 class="">Aqui puedes informarte de ferias celebradas en la ciudad de La Paz y El Alto</h5>
                                    <br><br><br><br><br><br><br>
                                </div>
                              <div class="col-sm-2"></div>
                            </div>
                         </div>          
                    </div>
                    <div class="wave">
                  </div>
         </article>
         <article >
                <br><br><br><br><br>
                <br><br><br><br><br>
                <br><br><br><br><br>
                <br><br><br><br><br>
                <br><br><br><br><br>
                <!-- Card -->
                <div class="timeline">
                    <ul>
                        @foreach ($feria as $item)
                        <li>
                            <div class="content">
                                <!-- Card -->
                            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                                {{-- <div class="card card-image" style="background-image: url({{asset('img/feria-dulces.jpg')}});"> --}}
                                <!-- Content -->
                                <div class="text-white rounded mb-0 text-center align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Marketing</h5>
                                    <h3 class="card-title pt-2"><strong>{{$item->nombre}}</strong></h3>
                                    <p>{{$item->descripcion}}</p><br>
                                    {{-- <p>{{$item->objetivo}}</p> --}}
                                    
                                    <a class="btn-floating btn-lg btn-default" data-toggle="modal" data-target=".bd-example-modal-lg "><h6>Ver Ubicacion  <i class="fas fa-map-marked-alt"></i></h6></a>
                                    <!-- Central Modal Medium Danger -->
                                    <div class="modal fade bd-example-modal-lg" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-notify modal-danger" role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                        <p class="heading lead">Ubicacion</p>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="white-text">&times;</span>
                                        </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body"  id="map" style="width: 100%; height: 500px">
                                        
                                        </div>
                                        
                                        <!--Footer-->
                                </div></div></div>
                                <script>
                                        @foreach ($localizacion as $itemL)
                                            @if ($item->idLocalizacion==$itemL->idLocalizacion)
                                                var myLatLng = {lng: {{$itemL->latitud}}, lat: {{$itemL->longitud}}};
                                            @endif
                                        @endforeach
                                        function initMap() {
                                        
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 13,
                                            center: myLatLng
                                        });
                                        var marker = new google.maps.Marker({
                                            
                                            position: myLatLng,
                                            map: map,
                                            title: '{{$item->nombre}}'
                                        });
                                        }
                                </script>
                                <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8v_BEnHy5oPO_t9D6IMjmrPiiye2Nyak&callback=initMap">
                                </script>
                                </div>
                            </div>
                            <!-- Card -->
                            </div>
                            <div class="time">
                                @foreach ($duracion as $itemD)
                                    @if ($item->idDuracion==$itemD->idDuracion)
                                        <h4>Del {{$itemD->fechaInicio}} hasta {{$itemD->fechaFin}}</h4>
                                    @endif
                                @endforeach
                                
                            </div>
                            <div class="time1">
                                <h6><strong>Objetivo</strong></h6>
                                <h6>{{$item->objetivo}}</h6>
                                <h6><strong>Cantidad de expositores:</strong> {{$item->cantStand}}</h6>
                                <h6><strong>Localizacion:</strong> {{$item->ciudad}}, {{$item->localidad}} {{$item->calle}}</h6>
                                <h6><strong>Contacto:</strong> {{$item->telefono}}</h6>
                            </div>
                        </li>
                        @endforeach
                        <div style="clear:both;"></div>
                    </ul>
                </div>
         </article>
      </section>
@endsection