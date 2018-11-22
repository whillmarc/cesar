@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
      @include('alerts.success')
          @include('alerts.errors')
      <h2>Aliados</h2>
      <small>Lista de información completa sobre los Aliados</small>
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
                  Rif
              </th> <th>
                  Tipo de Aliado
              </th>
              <th data-hide="phone,tablet">
                  Editar
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Suspender
              </th>
              <th data-hide="phone">
                  Estado
              </th> <th data-hide="phone">
                  Ver
              </th>
          </tr>
        </thead>
        <tbody>
          @foreach($aliados as $aliado)
          <tr class=" @if($aliado->id%2!=0)
                     footable-even
           @else footable-odd @endif">
              <td>{{$aliado->id}}</td>
              <td>{{$aliado->nombre}}</td>
              <td>{{$aliado->rif}}</td>
              <td>{{$aliado->tipo}}</td>
              <td><a href="{{url('/editaliado',['id' => $aliado->id,])}}" class="btn btn-warning"  style="color:#fff">Editar</a></td>
              @if($aliado->estado == 'Inactivo') 
            <td><a href="{{url('/activealiado',['id' => $aliado->id,])}}" class="btn btn-success"  style="color:#fff">Activar</a></td>
            @else
            <td><a href="{{url('/suspenderaliado',['id' => $aliado->id,])}}" class="btn btn-danger"  style="color:#fff">Suspender</a></td>
            @endif
             
              <td><label class="label @if($aliado->estado == 'Inactivo') danger @else success @endif" title="">{{$aliado->estado}}</label></td>
              <td><a href="{{url('/perfilaliado', ['id' => $aliado->id,])}}"><i class="fa fa-eye" style="font-size: 20px"></i></a></td>
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
      <a class="btn btn-block btn-warning" href="{{url('/addaliado')}}">Agregar un Aliado</a>
    </div>
  </div>
</div>



<!-- ############ PAGE END-->


@endsection