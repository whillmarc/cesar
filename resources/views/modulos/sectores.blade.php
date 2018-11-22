@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
              @include('alerts.success')
              @include('alerts.errors')
      <h2>Sectores</h2>
      <small>Chocolate, Mueble, Mecánica, Belleza, Agricultura, Emprendimiento, Formación Formadores, Instalación Antenas Satelitales</small>
    </div>
    <div>
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
                  Descripci&oacute;n
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
          @foreach($sectores as $sec)
          <tr class=" @if($sec->id%2!=0)
                     footable-even
           @else footable-odd @endif">
              <td>{{$sec->id}}</td>
              <td>{{$sec->nombre}}</td>
              <td>{{$sec->descripcion}}</td>
              <td><a href="{{url('/editsector',['id' => $sec->id,])}}" class="btn btn-warning"  style="color:#fff">Editar</a></td>
              @if($sec->estado == 'Inactivo') 
            <td><a href="{{url('/activesector',['id' => $sec->id,])}}" class="btn btn-success"  style="color:#fff">Activar</a></td>
            @else
            <td><a href="{{url('/suspendersector',['id' => $sec->id,])}}" class="btn btn-danger"  style="color:#fff">Suspender</a></td>
            @endif
             
              <td><label class="label @if($sec->estado == 'Inactivo') danger @else success @endif" title="">{{$sec->estado}}</label></td>
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
      <a class="btn btn-block btn-warning" href="{{url('/addsector')}}">Agregar un Sector</a>
      
    </div>
  </div>
</div>



<!-- ############ PAGE END-->
@endsection