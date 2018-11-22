@extends('home')
@section('content')

<!-- ############ PAGE START-->

  <div class="item">
    <div class="item-bg">
      <img src="../assets/images/naranja2.jpg" class="blur">
    </div>
    <div class="p-a-md">
      <div class="row m-t">
        <div class="col-sm-7">
          <a href class="pull-left m-r-md">
            <span class="avatar w-96">
              <img src="../assets/images/1.JPG">
              <i class="on b-white"></i>
            </span>
          </a>
          <div class="clear m-b">
            <h3 class="m-a-0 m-b-xs">{{$idd->primer_nombre}} {{$idd->primer_apellido}} </h3>
            <p class="text-muted"><i class="fas fa-envelope-square"></i><span class="m-r"><strong> correo:</strong> </span><strong>{{$idd->correo}}</strong></p>
           
          </div>
        </div>
        <div class="col-sm-5">
              <h4>
                Perfil del Profesor <hr/>
                
          </h4>
             
        </div>
      </div>
    </div>
  </div>
  <div class="dker p-x">
    <div class="row">
      <div class="col-sm-6 push-sm-6">
        <div class="p-y text-center text-sm-right">
          <a href class="inline p-x text-center">
            <span class="h4 block m-a-0">2k</span>
            <small class="text-xs text-muted">Participantes</small>
          </a>
          <a href class="inline p-x b-l b-r text-center">
            <span class="h4 block m-a-0">250</span>
            <small class="text-xs text-muted">Colaboradores</small>
          </a>
          <a href class="inline p-x text-center">
            <span class="h4 block m-a-0">2</span>
            <small class="text-xs text-muted">Cohortes</small>
          </a>
        </div>
      </div>
      <div class="col-sm-6 pull-sm-6">
        <div class="p-y-md clearfix nav-active-primary">
          <ul class="nav nav-pills nav-sm">
            <li class="nav-item ">
              <h4>Descripcion del Profesor</h4>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="padding" style="border: 1px solid gray;">
    <div class="row">
      
      <div class="col-md-12 offset-md-1">
            <div class="row m-b">
              <div class="col-xs-4">
                <small class="text-muted">Fecha de Registro</small>
                <div class="_500">{{$idd->created_at}}</div>
              </div>
              <div class="col-xs-4">
                <small class="text-muted">Ultima conexi&oacute;n</small>
                <div class="_500">{{$idd->updated_at}}</div>
              </div>            
              <div class="col-xs-4">
                <small class="text-muted">Cedula</small>
                <div class="_500">{{$idd->cedula}}</div>
              </div>                           
            </div>
      </div>

    </div>
    <hr>
        <div class="row">
      
      <div class="col-md-12 offset-md-1">
            <div class="row m-b">
              <div class="col-xs-4">
                <small class="text-muted">Telefono Local</small>
                <div class="_500">{{$idd->telefono_local}}</div>
              </div>            
              <div class="col-xs-4">
                <small class="text-muted">Telefono Movil</small>
                <div class="_500">{{$idd->telefono_movil}}</div>
              </div>                 
              <div class="col-xs-4">
                <small class="text-muted">Telefono de Oficina</small>
                <div class="_500">{{$idd->telefono_oficina}}</div>
              </div>           
            </div>
      </div>

    </div>

  </div>

<!-- ############ PAGE END-->
@endsection