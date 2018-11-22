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
            <p class="text-muted"><i class="fa fa-money-bill-alt"></i><span class="m-r"><strong> Presupuesto:</strong> </span><strong>{{$idd->presupuesto}}</strong></p>
             
            <a href class="btn btn-sm warn btn-rounded m-b">Colaboradores</a>
          </div>
        </div>

        <div class="col-sm-5">
              <h4>
                Objetivo Principal <hr>           
             </h4>
          <p class="text-md">{{$idd->objetivo_p}}</p>            
        </div>

        <div class="col-sm-5">
              <h4>
                Objetivo Secundario <hr>           
             </h4>
          <p class="text-md">{{$idd->objetivo_s}}</p>            
        </div>

      </div>
    </div>
  </div>
  <div class="dker p-x">
    <div class="row">
      <div class="col-sm-6 push-sm-6">
      </div>
      <div class="col-sm-6 pull-sm-6">
        <div class="p-y-md clearfix nav-active-primary">
          <ul class="nav nav-pills nav-sm">
            <li class="nav-item ">
              <a class="nav-link active" href data-toggle="tab" data-target="#tab_1">Descripci&oacute;n del proyecto</a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="padding">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="tab-content">      
          <div class="tab-pane p-v-sm active" id="tab_4">
            <div class="row m-b">
             <!-- <div class="col-xs-6">
                <small class="text-muted">Fecha de Inicio</small>
                <div class="_500">{{$idd->fecha_i}}</div>
              </div>-->
              <div class="col-xs-4">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Fecha de Inicio</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->fecha_i}}.</p>
                </div>
              </div>
            </div>
              <!--<div class="col-xs-6">
                <small class="text-muted">Fecha de culminaci&oacute;n</small>
                <div class="_500">{{$idd->fecha_f}}</div>
              </div> -->
               <div class="col-xs-4">
               <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Fecha de Culminacion</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;"></h5>
                <p class="card-text" style="color: black;">{{$idd->fecha_f}}.</p>
                </div>
               </div>
               </div>
                <div class="col-xs-4">
               <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Presupuesto</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;"></h5>
                <p class="card-text" style="color: black;">{{$idd->presupuesto}} BsS.</p>
                </div>
               </div>
               </div>

            </div>
            <div class="row m-b">
             <div class="col-xs-4">
               <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Fecha de Registro</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->created_at}}.</p>
                </div>
               </div>
               </div>

                    <div class="col-xs-4">
               <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Ultima Modificacion</div>
                <div class="card-body">
                <h5 class="card-title" style="color: black;"></h5>
                <p class="card-text" style="color: black;">{{$idd->updated_at}}.</p>
                </div>
               </div>
               </div> 
               
                <div class="col-xs-4">
               <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Estado</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->estado}}.</p>
                </div>
               </div>
               </div>

            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      
      <div class="col-sm-12 col-lg-12">
        <div>
          <div class="box">
              <div class="box-header">
                <h3>Partidas</h3>
              </div>
              <div class="box-divider m-a-0"></div>
            
      <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
               <th data-toggle="true">
                  #ID
              </th>
              <th data-toggle="true">
                  Nombre
              </th>
              <th>
                  Monto 
              </th> 
              <th data-hide="phone,tablet">
                  Editar
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Suspender
              </th>
              <th data-hide="phone">
                  Estado
              </th> 
          </tr>
        </thead>
        <tbody>
          @foreach($partidas as $partida)
         <tr>
           <td>{{$partida->id}}</td>
           <td>{{$partida->nombre}}</td>
           <td>{{$partida->monto}}</td>
           <td><a href="{{url('/editpartida',['id' => $partida->id,])}}" class="btn btn-warning"  style="color:#fff">Editar</a></td>
             @if($partida->estado == 'Inactivo') 
            <td><a href="{{url('/activepartida',['id' => $partida->id,])}}" class="btn btn-success"  style="color:#fff">Activar</a></td>
            @else
            <td><a href="{{url('/suspenderpartida',['id' => $partida->id,])}}" class="btn btn-danger"  style="color:#fff">Suspender</a></td>
            @endif
             <td><label class="label @if($partida->estado == 'Inactivo') danger @else success @endif" title="">{{$partida->estado}}</label></td>
         </tr>
          @endforeach
        </tbody>
        <tfoot class="hide-if-no-paging">
          <tr>
              <td colspan="5" class="text-center">
                  <ul class="pagination"></ul>
              </td>
          </tr>
        </tfoot>
      </table>

            <form action="{{url('/perfilproyecto/addpartida')}}" method="POST">
                {!! csrf_field() !!} 
              <input type="hidden" name="idc" value="{{$idd->id}}">

              <button class="btn warn m-b btn-block" type="submit" style="color:#fff"><i class="fa fa-plus"></i>Añadir Partida</button>
            </form>
          </div>

        </div>
      </div>
      
    </div>
  </div>

<!-- ############ PAGE END-->
@endsection