@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
    
          <div class="col-md-12">
            <div class="box text-center">
                
          
              <p>Participantes en espera</p>
            </div>
          </div>

     @foreach($participantes as $participante)
      @if($participante->estatus == "espera")

    <div class="col-md-3">
      <div class="box">
        <div class="box-header">
          <h2>{{$participante->primer_nombre}} {{$participante->primer_apellido}}</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" action="{{url('/registroPC',['id' => $participante->id,])}}" method="post">
             {!! csrf_field() !!}

             <input type="hidden" name="idc" value="{{$id}}">
             <input type="hidden" name="idp" value="{{$participante->id}}">
               <input type="text" name="cohorte" value="{{$coh}}">  

            <div class="form-group">
              <label for="exampleInputEmail1">Cedula: {{$participante->cedula}}</label>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Correo: {{$participante->correo}}</label>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Telefono: {{$participante->telefono_movil1}}</label>
            </div>
            <button type="submit" class="btn btn-success btn-block">Agregar</button>
          </form>
        </div>
      </div>
    </div>
    @endif
     @endforeach
    
   
  </div>
  <div class="row">
    
          <div class="col-md-12">
            <div class="box text-center">
              <p>Participantes asociados a un Cohorte</p>
            </div>
          </div>

     @foreach($participantes as $participante)
      @if($participante->estatus == "Asignado")

    <div class="col-md-3">
      <div class="box">
        <div class="box-header">
          <h2>{{$participante->primer_nombre}} {{$participante->primer_apellido}}</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" action="{{url('/eliminarPC',['id' => $participante->id,])}}" method="post">
             {!! csrf_field() !!}

            <div class="form-group">
              <label for="exampleInputEmail1">Cedula: {{$participante->cedula}}</label>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Correo: {{$participante->correo}}</label>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Telefono: {{$participante->telefono_movil1}}</label>
            </div>
            <button type="submit" class="btn btn-danger btn-block">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
    @endif
     @endforeach
    
   
  </div>
</div>



<!-- ############ PAGE END-->
@endsection