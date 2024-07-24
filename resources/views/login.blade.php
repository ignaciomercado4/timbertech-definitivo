@extends('layouts.basicLayout')

@section('title', 'Login')

@section('content')
<section style="height: 90;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="mb-2 fs-1 josefin">Iniciar sesión</h2>
                <p class="text-white-50 mb-5">Ingrese su usuario y contraseña</p>
  
                <div data-mdb-input-init class="form-outline form-white mb-4">
                  <input type="text" id="usuario" class="form-control form-control-lg" placeholder="Usuario"/>
                  <label class="form-label" for="usuario">Usuario</label>
                </div>
  
                <div data-mdb-input-init class="form-outline form-white mb-4">
                  <input type="password" id="contrasenia" class="form-control form-control-lg" placeholder="Contraseña"/>
                  <label class="form-label" for="contrasenia">Contraseña</label>
                </div>
  
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">¿Olvidaste tu contraseña?</a></p>
  
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5 josefin" type="submit">Login</button>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection