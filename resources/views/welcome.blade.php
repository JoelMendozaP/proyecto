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
                                <h3>{{$item->nombre}}</h3>
                                <p>{{$item->descripcion}}</p>
                                <p>{{$item->objetivo}}</p>
                            </div>
                            <div class="time">
                                @foreach ($duracion as $itemD)
                                    @if ($item->idDuracion==$itemD->idDuracion)
                                        <h4>{{$itemD->fechaInicio}}</h4>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                        @endforeach
                        <div style="clear:both;"></div>
                    </ul>
                </div>
         </article>
            
      </section>
@endsection