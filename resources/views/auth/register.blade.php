@extends('layouts.app')

@section('content')

<div class="center-block w-xxl w-auto-xs p-y-md">
     <div class="navbar">
      <h2>
        CREAR CUENTA
      </h2>
    </div>
  
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b text-sm">
      </div>
      <form name="form" role="form" method="POST" action="{{ url('/register') }}">
         {!! csrf_field() !!}
        <div class="md-form-group">
          <input type="text" class="md-input" name="name" required>
          <label>Nombre</label>
        </div>
        <div class="md-form-group">
          <input type="email" class="md-input" name="email" required>
          <label>Correo</label>
        </div>
        <div class="md-form-group">
          <input type="password" class="md-input" name="password" placeholder="Ingrese mas de 6 digitos" required>
          <label>Contraseña</label>
        </div>
         <div class="md-form-group">
          <input type="password" class="md-input" name="password_confirmation" placeholder="Ingrese mas de 6 digitos" required>
          <label>Confirmar Contraseña</label>
        </div>
        <div class="m-b-md">
          <label class="md-check">
            <input type="checkbox" required><i class="primary"></i>Acepto los <a href>Terminos y Condiciones</a>
          </label>
        </div>
        <button type="submit" class="btn primary btn-block p-x-md">Registrarse</button>
      </form>
    </div>

    <div class="p-v-lg text-center">
      <div>¿Ya posees una cuenta? <a ui-sref="access.signin" href="{{url('/login')}}" class="text-primary _600">Iniciar Sesion</a></div>
    </div>
  </div>

@endsection
