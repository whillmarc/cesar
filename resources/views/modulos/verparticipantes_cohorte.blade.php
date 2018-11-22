@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
    
          <div class="col-md-12">
            <div class="box text-center">
              <p>Participantes asociados a el Cohorte {{$nomcoh}} en el periodo {{$fechaicoh . " / " . $fechafcoh}}</p>
            </div>
          </div>

     @foreach($participantes as $participante)
      @if($participante->cohorte == $coh)

    <div class="col-md-3">
      <div class="box">
        <div class="box-header btn-primary">
          <h2>{{$participante->primer_nombre}} {{$participante->primer_apellido}}</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" action="{{url('/perfilparticipante',['id' => $participante->id,])}}" method="post">
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
            <button type="submit" class="btn success btn-block">Ver Participante</button>
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