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
              <img src="/movie/{{$idd->path}}">
              <i class="on b-white"></i>
            </span>
          </a>
          <div class="clear m-b">
            <h3 class="m-a-0 m-b-xs">{{$idd->nombre}}</h3>
            <p class="text-muted"><i class="fas fa-envelope-square"></i><span class="m-r"><strong> correo:</strong> </span><strong>{{$idd->correo}}</strong></p>
           
          </div>
        </div>
        <div class="col-sm-5">
              <h4>
                Perfil del Centro de Formacion <hr/>               
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
            <span class="h4 block m-a-0">20</span>
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
              <h4>Descripcion del Centro de Formacion</h4>
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

                <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Proyecto: {{$idd->nombre}}</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;">Fecha de Registro</h5>
                <p class="card-text" style="color: black;">La fecha de registro de este Centro fué el "{{$idd->created_at}}".</p>
                </div>
              </div>
            </div> 

            <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Proyecto: {{$idd->nombre}}</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;">Ultima Conexión</h5>
                <p class="card-text" style="color: black;">La ultima conexión de este Centro fué el "{{$idd->updated_at}}".</p>
                </div>
              </div>
            </div> 

            <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Proyecto: {{$idd->nombre}}</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;">Rif</h5>
                <p class="card-text" style="color: black;">El Rif registrado por parte de este Centro es "{{$idd->rif}}".</p>
                </div>
              </div>
            </div>

            <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Proyecto: {{$idd->nombre}}</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;">Observaciones</h5>
                <p class="card-text" style="color: black;">Las Observaciones por parte del Centro son "{{$idd->observaciones}}".</p>
                </div>
              </div>
            </div>

            </div>
      </div>

    </div>
    <hr>
        <div class="row">
      
      <div class="col-md-12 offset-md-1">
            <div class="row m-b">   

              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Proyecto: {{$idd->nombre}}</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;">Parroquia</h5>
                <p class="card-text" style="color: black;">La parroquia registrada por parte de este Centro fué el "{{$idd->parroquia}}".</p>
                </div>
              </div>
            </div> 

            <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Proyecto: {{$idd->nombre}}</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;">Banco</h5>
                <p class="card-text" style="color: black;">El Banco registrado por parte de este Centro es "{{$idd->banco}}".</p>
                </div>
              </div>
            </div> 

            <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Proyecto: {{$idd->nombre}}</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;">Tipo de Espacio</h5>
                <p class="card-text" style="color: black;">El tipo de Espacio registrado por parte de este Centro es "{{$idd->tipo_casa}}".</p>
                </div>
              </div>
            </div>

            <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Proyecto: {{$idd->nombre}}</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;">Numero de Casa o Apartamento</h5>
                <p class="card-text" style="color: black;">El Numero de Casa o Apartamento registrado por parte de este Centro es "{{$idd->numero_casa}}".</p>
                </div>
              </div>
            </div>


            </div>
      </div>

    </div>

  </div>

<!-- ############ PAGE END-->
@endsection