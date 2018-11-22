@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
      @include('alerts.request')
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Editar Proyecto {{$idd->id}}</h2>
       
         
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
         <!-- <form role="form" action="{{url('/modiproyecto')}}" method="post" files="true"> -->
            {!!Form::open(['url'=>'/modiproyecto', 'method'=>'POST', 'files' => true])!!}
             {!! csrf_field() !!}
              <input type="hidden" name="idc" class="form-control" value="{{$idd->id}}">
              <div class="form-group">
              <label for="exampleInputEmail1">Programa</label>
              <select name="nombre" class="form-control">
                <option value="{{$idd->nombre}}">{{$idd->nombre}}</option>
              </select>
              
            </div>
                        
               <div class="form-group">
              <label for="exampleInputEmail1">Fecha de Inicio</label>
              <input type="text" id="datepicker" class="form-control" name="fecha_i" value="{{$idd->fecha_i}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fecha Culminaci&oacute;n</label>
              <input type="text" id="datepicker2" class="form-control" name="fecha_f" value="{{$idd->fecha_f}}">
            </div>
          
            <div class="form-group">
              <label for="exampleInputPassword1">Objetivo Principal</label>
              <textarea type="text" name="objetivo_p" class="form-control">{{$idd->objetivo_p}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Objetivo Secundario</label>
              <textarea type="text" name="objetivo_s" class="form-control">{{$idd->objetivo_s}}</textarea>
            </div>
            
              <div class="form-group">
              <label for="exampleInputEmail1">Presupuesto</label>
              <input type="text" name="presupuesto" class="form-control" value="{{$idd->presupuesto}}">
            </div>

            <!-- <div class="form-group">
              <label for="exampleInputEmail1">Subir Documento</label>
              <input type="file" name="path" class="form-control" value="{{$idd->path}}">
            </div> -->
            <div class="form-group">
            {!!Form::label('exampleInputEmail1','Subir Documento')!!}
            {!!Form::file('path')!!}
          </div>
            
            <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
            <a type="button" href="{{url('/proyectos')}}" class="btn btn-danger btn-block">Cancelar</a>
         <!-- </form> -->
           {!!Form::close()!!}
        </div>
      </div>
    </div>
    
  </div>
</div>



<!-- ############ PAGE END-->
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