@extends('layouts.app')

@section('content')

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">

    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b text-sm">
      </div>
       <span>
        INICIAR SESION</span>
      <form name="form" role="form" method="POST" action="{{ url('/login') }}">
          {!! csrf_field() !!}
        <div class="md-form-group float-label">
          <input type="email" class="md-input" name="email"  ng-model="user.email" required>
          <label>Correo</label>
        </div>
        <div class="md-form-group float-label">
          <input type="password"  name="password" class="md-input" ng-model="user.password" required>
          <label>Contraseña</label>
        </div>      
        <div class="m-b-md">        
          <label class="md-check">
            <input type="checkbox"><i class="primary" name="remember"></i>Recordar Usuario
          </label>
        </div>
        <button type="submit" class="btn primary btn-block p-x-md">Iniciar Sesion</button>
      </form>
    </div>
​
    <div class="p-v-lg text-center">
      <div class="m-b"><a ui-sref="access.forgot-password" href="{{ url('/password/reset') }}" class="text-primary _600">¿Olvidaste tu Contraseña?</a></div>
      <div>¿No tienes una cuenta? <a ui-sref="access.signup" href="{{ url('/register') }}" class="text-primary _600">Registrarse</a></div>
    </div>
  </div>
<!-- ############ LAYOUT END-->
@endsection
