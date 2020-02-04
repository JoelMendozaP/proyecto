@extends('layouts.app')

@section('content')
<div class="mask rgba-orange-slight d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <!-- textos responsives -->
            <div class="col-md-6 text-white" >
            <br><br><br><br><br>
            <h1 class="h1-responsive d-none d-md-block">FERIAS EN LA PAZ BOLIVIA</h1>
            <hr class="bg-light">
            <h5 class=" text-left">Bienvenido/a a nuestra página web nuestro hogar en el mundo digital.</h5>
            <h5 class=" text-left">Aqui puedes Registrarte para crear e informarte de ferias celebradas en la ciudad de La Paz y El Alto</h5>  
            <div class="text-center text-md-left">
                <button class="btn btn-orange btn-lg">Ver Ferias
                  <i class="fas fa-play ml-2"></i>
               </button>
              </div>
        </div>
            <!-- formulario -->
            <div class="col-md-6 mt-3">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center orange-text" ><b>Regístrate</b></h3>
                  <hr>
                  <form method="POST" action="{{ route('register') }}" class="border border-light p-5">
                          @csrf
  
                          <div class="md-form">
                                  <i class="fas fa-user prefix orange-text"></i>
                                  <input id="name" type="text" class=" form-control input-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                  <label for="name">{{ __('Nombre') }}</label>
                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                          
                          <div class="md-form">
                                  <i class="fas fa-user prefix orange-text"></i>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                  <label for="email" >{{ __('E-Mail Address') }}</label>
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                          <div class="md-form">
                              <i class="fas fa-lock prefix orange-text"></i>
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                  <label for="password" >{{ __('Password') }}</label>
                                  <small class="form-text text-muted mb-4">
                                       Sugerencia: Al menos 8 caracteres y 1 dígito
                                  </small>
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
  
                          <div class="md-form">
                              <i class="fas fa-lock prefix orange-text"></i>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              <label for="password-confirm">{{ __('Confirm Password') }}</label>

                          </div>
                          
                          {{-- <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4"> --}}
                                  <button type="submit" class="btn orange-gradient btn-orange btn-block  my-4">
                                      {{ __('Register') }}
                                  </button>
                              {{-- </div>
                          </div> --}}
                      </form>
                </div>
              </div>
            </div>
          </div>
    </div>          
  </div>
  <br><br><br><br><br><br>
@endsection
