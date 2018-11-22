@extends('home')

@section('heads')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
@endsection

@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
      @include('alerts.request')
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Modificar Tutor</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" action="{{url('/moditutor')}}" method="POST" files="true" enctype="multipart/form-data">
             {!! csrf_field() !!}
             <input type="hidden" name="idc" class="form-control" value="{{$idd->id}}">                
            <div class="form-group">
              <label for="exampleInputEmail1">Primer Nombre</label>
              <input type="text" class="form-control" name="primer_nombre" placeholder="Ingrese el primer nombre" value="{{$idd->primer_nombre}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Segundo Nombre</label>
              <input type="text" class="form-control" name="segundo_nombre" placeholder="Ingrese el segundo nombre" value="{{$idd->segundo_nombre}}">
            </div>
          
            <div class="form-group">
              <label for="exampleInputPassword1">Primer Apellido</label>
              <input type="text" name="primer_apellido" class="form-control" placeholder="Ingrese el primer apellido" value="{{$idd->primer_apellido}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Segundo Apellido</label>
              <input type="text" name="segundo_apellido" class="form-control" placeholder="Ingrese el segundo apellido" value="{{$idd->segundo_apellido}}">
            </div>
            
              <div class="form-group">
              <label for="exampleInputEmail1">Cedula</label>
              <input type="text" name="cedula" class="form-control" placeholder="Ingrese la cedula" value="{{$idd->cedula}}">
            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">Empresa</label>
              <input type="text" name="empresa" class="form-control" placeholder="Ingrese la empresa" value="{{$idd->empresa}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Cargo</label>
              <input type="text" name="cargo" class="form-control" placeholder="Ingrese el cargo" value="{{$idd->cargo}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Telefono Local</label>
              <input class="form-control" name="telefono_local" placeholder="Ingresa el telefono local" value="{{$idd->telefono_local}}">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Telefono Movil</label>
              <input type="text" name="telefono_movil" class="form-control" placeholder="Ingrese el telefono movil" value="{{$idd->telefono_movil}}"> 
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Telefono de Oficina</label>
              <input type="text" name="telefono_oficina" class="form-control" placeholder="Ingrese el telefono de oficina" value="{{$idd->telefono_oficina}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" name="correo" class="form-control" placeholder="Ingrese el correo" value="{{$idd->correo}}">
            </div>

            <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
            <a type="button" href="{{url('/tutores')}}" class="btn btn-danger btn-block">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script> 
<script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
@endsection