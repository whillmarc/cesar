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
          <h2>Editar Participante {{$idd->id}}</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
        <!--   <form role="form" action="{{url('/modiparticipantes')}}" method="POST" files="true">
             {!! csrf_field() !!}
            <input type="hidden" name="idc" class="form-control" value="{{$idd->id}}">
            <div class="form-group">
              <label for="exampleInputEmail1">Foto</label>
              <input type="file" name="path" value="{{ $idd->path }}">
            </div> -->

            {!!Form::open(['url'=>'/modiparticipantes', 'method'=>'POST', 'files' => true])!!}
             {!! csrf_field() !!}
             <input type="hidden" name="idc" class="form-control" value="{{$idd->id}}">
               <div class="form-group">
            {!!Form::label('exampleInputEmail1','Foto')!!}
            {!!Form::file('path')!!}
              </div>
                        
            <div class="form-group">
              <label for="exampleInputEmail1">Primer Nombre</label>
              <input type="text" name="primer_nombre" class="form-control" value="{{$idd->primer_nombre}}">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Segundo Nombre</label>
              <input type="text" name="segundo_nombre" class="form-control" value="{{$idd->segundo_nombre}}">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Primer Apellido</label>
              <input type="text" name="primer_apellido" class="form-control" value="{{$idd->primer_apellido}}">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Segundo Apellido</label>
              <input type="text" name="segundo_apellido" class="form-control" value="{{$idd->segundo_apellido}}">
            </div>
            <div class="form-group">
              <label>Nacionalidad</label>
                 <select class="form-control" name="nacionalidad">
                   <option>{{$idd->nacionalidad}}</option>
                   <option>Extranjero(a)</option>
                   <option>Venezolano(a)</option>
                 </select>
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Cedula</label>
              <input type="text" name="ced" class="form-control" value="{{$idd->ced}}">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fecha de Nacimiento</label>
              <input type="text" id="datepicker" class="form-control" name="fecha_nacimiento" value="{{$idd->fecha_nacimiento}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Lugar de Nacimiento</label>
              <input type="text" name="lugar_nacimiento" class="form-control" value="{{$idd->lugar_nacimiento}}">
              </div>
              <div class="form-group">
                <label>Estado Civil</label>
                 <select class="form-control" name="estado_civil">
                   <option>{{$idd->estado_civil}}</option>
                   <option>Soltero(a)</option>
                   <option>Casado(a)</option>
                   <option>Divorciado(a)</option>
                   <option>Viudo(a)</option>
                   <option>Concubinato(a)</option>
                 </select>
            </div>
            <div class="form-group">
                 <label>Sexo</label>
                 <select class="form-control" name="sexo">
                   <option>{{$idd->sexo}}</option>
                   <option>Masculino</option>
                   <option>Femenino</option>
                 </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parroquia, Municipio o Estado</label>
              <input type="text" name="parroquia" class="form-control" value="{{$idd->parroquia}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Avenida o Calle</label>
              <input type="text" name="avenida" class="form-control" value="{{$idd->avenida}}">
              </div>
              <div class="form-group">
                 <label>Edificio o Casa</label>
                 <select class="form-control" name="casa">
                   <option>{{$idd->casa}}</option>
                   <option>Edificio</option>
                   <option>casa</option>
                 </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Numero de Departamento o Casa</label>
              <input type="number" name="numero_casa" class="form-control" value="{{$idd->numero_casa}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Telefono Local</label>
              <input type="text" name="telefono_local" class="form-control" value="{{$idd->telefono_local}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Telefono Movil 1</label>
              <input type="text" name="telefono_movil1" class="form-control" value="{{$idd->telefono_movil1}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Telefono Movil 2</label>
              <input type="text" name="telefono_movil2" class="form-control" value="{{$idd->telefono_movil2}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Telefono Familiar</label>
              <input type="text" name="telefono_familiar" class="form-control" value="{{$idd->telefono_familiar}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Otro Telefono</label>
              <input type="text" name="otro_telefono" class="form-control" value="{{$idd->otro_telefono}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Correo Electónico</label>
              <input type="email" name="correo" class="form-control" value="{{$idd->correo}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Numero de Hijos</label>
              <input type="number" name="hijos" class="form-control" value="{{$idd->hijos}}">
              </div>
               <div class="form-group">
              <label for="exampleInputEmail1">Personas a Cargo</label>
              <input type="number" name="persona_cargo" class="form-control" value="{{$idd->persona_cargo}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Nivel de Instruccion</label>
              <input type="text" name="nivel_instruccion" class="form-control" value="{{$idd->nivel_instruccion}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Situacion de Estudio Actual</label>
              <input type="text" name="situacion_actual_estudio" class="form-control" value="{{$idd->situacion_actual_estudio}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Situacion Laboral Inicial</label>
              <input type="text" name="situacion_laboral_inicial" class="form-control" value="{{$idd->situacion_laboral_inicial}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Experiencia Laboral</label>
              <input type="text" name="experiencia_laboral" class="form-control" value="{{$idd->experiencia_laboral}}">
              </div>
             <label for="exampleInputEmail1">Contactado</label>
              <input type="text" name="experiencia_laboral" class="form-control" value="{{$idd->contactado}}">
              </div>
            <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
            <a type="button" href="{{url('/participantes')}}" class="btn btn-danger btn-block">Cancelar</a>
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