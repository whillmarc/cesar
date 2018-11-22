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
          <h2>Agregar Proyecto</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
         <!-- <form role="form" action="{{url('/registrarproyecto')}}" method="POST" enctype="multipart/form-data"> -->
            {!!Form::open(['url'=>'/registrarproyecto', 'method'=>'POST', 'files' => true])!!}
             {!! csrf_field() !!}
                        
            <div class="form-group">
              <label for="exampleInputEmail1">Programa</label>
              <select name="nombre" class="form-control">
                @foreach($programas as $programa)
                <option> {{$programa->nombre}} </option>
                @endforeach
              </select>
              
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fecha de Inicio</label>
              <input type="text" id="datepicker" class="form-control" name="fecha_i">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fecha Culminaci&oacute;n</label>
              <input type="text" id="datepicker2" class="form-control" name="fecha_f">
            </div>
          
            <div class="form-group">
              <label for="exampleInputPassword1">Objetivo Principal</label>
              <textarea type="text" name="objetivo_p" class="form-control" placeholder="Ingrese la Descripci&oacute;n del Objetivo"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Objetivo Secundario</label>
              <textarea type="text" name="objetivo_s" class="form-control" placeholder="Ingrese la Descripci&oacute;n del Objetivo"></textarea>
            </div>
            
              <div class="form-group">
              <label for="exampleInputEmail1">Presupuesto</label>
              <input type="text" name="presupuesto" class="form-control" placeholder="Ingrese el monto">
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputEmail1">Subir Documento</label>
              <input type="file" name="path" class="form-control">
            </div>-->
            <div class="form-group">
            {!!Form::label('exampleInputEmail1','Subir Documento')!!}
            {!!Form::file('path')!!}
          </div>
            <button type="submit" class="btn btn-warning btn-block">Agregar</button>
            <a type="button" href="{{url('/proyectos')}}" class="btn btn-danger btn-block">Cancelar</a>
         <!-- </form> -->
           {!!Form::close()!!}
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