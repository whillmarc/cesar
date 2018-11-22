@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
    
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Agregar Sector</h2>
          <small></small>
        </div>

        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" action="{{url('/registersector')}}" method="post">
             {!! csrf_field() !!}
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del sector">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Descripci&oacute;n</label>
              <textarea type="text" name="descripcion" class="form-control" placeholder="Ingrese la Descripci&oacute;n"></textarea>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Agregar</button>
            <a type="button" href="{{url('/sectores')}}" class="btn btn-danger btn-block">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</div>



<!-- ############ PAGE END-->
@endsection