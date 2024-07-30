@extends('layouts.basicLayout')

@section('title', 'Login')

@section('content')
<section style="height: 80vh;">
    <div class="josefin container py-5 h-100">
      <div class="josefin row d-flex justify-content-center align-items-center h-100">
        <div class="josefin col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="josefin card bg-dark text-white" style="border-radius: 1rem;">
            <div class="josefin card-body p-5 text-center">
  
              <div class="josefin mb-md-5 mt-md-4 pb-5">
  
                <h2 class="josefin mb-2 fs-1 josefin">Iniciar sesión</h2>
                <p class="josefin mb-2 josefin opacity-50">¡Es bueno tenerte de vuelta!</p>
                <p class="josefin text-white-50 mb-2 josefin">Ingresa tu usuario y contraseña</p>
                
                <p class="opacity-50">
                  ¿No tenés cuenta?
                  <a href="{{ url('/formRegistro') }}" class="fs-7 text-light opacity-50"> Registrate acá</a>
                </p>
                
                <form method="POST" action="{{ route('inicia-sesion') }}">
                  @csrf
                  <div class="text-start">
                      <label for="email" class="mt-3">Ingrese su correo:</label>
                      <input type="email" id="email" name="email" placeholder="Correo" class="form-control">
                      
                      <label for="password" class="mt-3">Ingrese su contraseña:</label>
                      <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control">
                      
                      <label for="remember">Mantener sesión iniciada</label>
                      <input name="remember" type="checkbox" id="remember">
                  </div>
                  <button type="submit" class="btn btn-light mt-3 fs-5">Ingresar</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection