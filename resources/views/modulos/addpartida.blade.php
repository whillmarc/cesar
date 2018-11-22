@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
    
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Agregar Partida</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" action="{{url('/registropartida')}}" method="post">
             {!! csrf_field() !!}
             <input type="hidden" name="idc" value="{{$id}}">      
            <div class="form-group">
              <label for="exmpleInputEmail1">Nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre de la partida">
            </div>
            <div class="form-group">
              <label for="">Monto</label>
               <input type="text" name="monto" class="form-control" placeholder="Ingrese el monto de la partida">
            </div>
            <button type="submit" class="btn btn-warning btn-block">Agregar</button>
            <a type="button" href="{{url('/proyectos')}}" class="btn btn-danger btn-block">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</div>



<!-- ############ PAGE END-->
@endsection