@extends('layouts.basicLayout')

@section('title', 'Login')

@section('content')
<section style="height: 90;">
    <div class="josefin container py-5 h-100">
      <div class="josefin row d-flex justify-content-center align-items-center h-100">
        <div class="josefin col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="josefin card bg-dark text-white" style="border-radius: 1rem;">
            <div class="josefin card-body p-5 text-center">
  
              <div class="josefin mb-md-5 mt-md-4 pb-5">
  
                <h2 class="josefin mb-2 fs-1 josefin">Iniciar sesión</h2>
                <p class="josefin mb-2 josefin opacity-50">¡Es bueno tenerte de vuelta!</p>
                <p class="josefin text-white-50 mb-5 josefin">Ingresa tu usuario y contraseña</p>
  
                <div data-mdb-input-init class="josefin form-outline form-white mb-4">
                  <input type="text" id="usuario" class="josefin form-control form-control-lg" placeholder="Usuario"/>
                  <label class="josefin form-label" for="usuario">Usuario</label>
                </div>
  
                <div data-mdb-input-init class="josefin form-outline form-white mb-4">
                  <input type="password" id="contrasenia" class="josefin form-control form-control-lg" placeholder="Contraseña"/>
                  <label class="josefin form-label" for="contrasenia">Contraseña</label>
                </div>
  
                <p class="josefin small mb-5 pb-lg-2"><a class="josefin text-white-50" href="#!">¿Olvidaste tu contraseña?</a></p>
  
                <button data-mdb-button-init data-mdb-ripple-init class="josefin btn btn-outline-light btn-lg px-5 josefin" type="button" onclick="window.location.href = '{{ url("") }}'">Login</button>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection