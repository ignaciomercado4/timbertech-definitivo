@extends('layouts.basicLayout')

@section('title', 'Registro')

@section('content')
<section style="height: 80vh;">
    <div class="josefin container py-5 h-100">
      <div class="josefin row d-flex justify-content-center align-items-center h-100">
        <div class="josefin col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="josefin card bg-dark text-white" style="border-radius: 1rem;">
            <div class="josefin card-body p-5 text-center">
  
              <div class="josefin mb-md-5 mt-md-4 pb-5">
  
                <h2 class="josefin mb-2 fs-1 josefin">Formulario de registro</h2>
                <p class="josefin mb-2 josefin opacity-50">¡Creemos tu usuario!</p>
                <p class="josefin text-white-50 mb-2 josefin">Elige tu usuario y contraseña</p>
  
                <form method="POST" action="{{ route('validar-registro') }}" id="formRegistrarUsuario">
                  @csrf
                  
                  <div class="text-start">
                    <label for="name" class="mt-3">Elige un nombre de usuario:</label>
                    <input type="text" name="name" placeholder="Usuario" class="form-control">
                    <label for="email" class="mt-3">Ingresa tu Email:</label>
                    <input type="email" name="email" placeholder="Email" class="form-control">
                    <label for="password" class="mt-3">Elige una contraseña:</label>
                    <input type="password" id="userPassword" name="password" placeholder="Contraseña" class="form-control">
                  </div>

                  <button type="button" class="btn btn-light mt-3 fs-5" onclick="validarDatosUsuario()">Crear usuario</button>
                  
                </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @push('scripts')
      <script type="text/javascript">
        function validarDatosUsuario() {
          const regex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?!.* ).{8,16}$/;
          let userPassword = document.querySelector('#userPassword').value;
          if (!regex.test(userPassword)) {
            alert('TA MAL TU CONTRASEÑA');
          }
          else {
            alert('ok');
            let formRegistrarUsuario = document.querySelector('#formRegistrarUsuario');
            formRegistrarUsuario.submit();
          }
        }
      </script>
  @endpush

@endsection