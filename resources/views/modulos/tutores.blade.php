@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
      @include('alerts.success')
          @include('alerts.errors')
      <h2>Tutores</h2>
      <small>Lista de información completa sobre los Tutores</small>
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
               <th>Apellido</th>
              <th>
                  Cedula
              </th> <th>
                  Correo
              </th>
              <th data-hide="phone,tablet">
                  Editar
              </th>
              <th data-hide="phone">
                  Opciones</th>
                  <th>Estado</th>

          </tr>
        </thead>
        <tbody>
           @foreach($tutores as $tutor)
             <tr>
             <td>{{ $tutor->id}}</td>
             <td>{{ $tutor->primer_nombre }}</td>
             <td>{{ $tutor->primer_apellido }}</td>
             <td>{{ $tutor->cedula}}</td>
             <td>{{ $tutor->correo }}</td>
             <td><a href="{{url('/edittutor',['id' => $tutor->id,])}}" class="btn btn-warning"  style="color:#fff">Editar</a></td>
             @if($tutor->estado == 'Inactivo') 
            <td><a href="{{url('/activetutor',['id' => $tutor->id,])}}" class="btn btn-success"  style="color:#fff">Activar</a></td>
            @else
            <td><a href="{{url('/suspendertutor',['id' => $tutor->id,])}}" class="btn btn-danger"  style="color:#fff">Suspender</a></td>
            @endif
             <td><label class="label @if($tutor->estado == 'Inactivo') danger @else success @endif" title="">{{$tutor->estado}}</label></td>
              
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
      <a class="btn btn-block btn-warning" href="{{url('/addtutor')}}">Agregar un tutor</a>
    </div>
  </div>
</div>



<!-- ############ PAGE END-->


@endsection