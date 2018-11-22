@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
      @include('alerts.success')
          @include('alerts.errors')
      <h2>Participantes</h2>
      <small>Lista de información completa sobre los participantes</small>
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
                  Apellido
              </th> <th>
                  Cedula
              </th>
              <th data-hide="phone,tablet">
                  Editar
              </th>
              <th data-hide="phone">
                Contactado
              </th> <th data-hide="phone">
                  Ver
              </th>
          </tr>
        </thead>
        <tbody>
          @foreach($participantes as $participante)
            
            @if($participante->cohorte == $id)
          <tr class=" @if($participante->id%2!=0)
                     footable-even
           @else footable-odd @endif">
              <td>{{$participante->id}}</td>
              <td>{{$participante->primer_nombre}}</td>
              <td>{{$participante->primer_apellido}}</td>
              <td>{{$participante->cedula}}</td>
              <td><a href="{{url('/editparticipante',['id' => $participante->id,])}}" class="btn btn-warning"  style="color:#fff">Editar</a></td>
              
             
              <td><a class="btn @if($participante->contactado=='Si') btn-success @else btn-danger @endif" href="{{url('/p',['idp' => $participante->id . " " . $participante->cohorte,])}}">{{$participante->contactado}}</a></td>
              
              <td><a href="{{url('/perfilparticipante',['id' => $participante->id,])}}" ><i class="fa fa-eye" style="font-size: 20px"></i></a></td>
          </tr>
            @endif
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
    </div>
  </div>
</div>

<!-- ############ PAGE END-->


@endsection