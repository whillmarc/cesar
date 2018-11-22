@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
      @include('alerts.success')
          @include('alerts.errors')
      <h2>Centros de Formacion</h2>
      <small>Lista de información completa sobre los Centros de Formacion</small>
    </div>
    <div>
      <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
               <th data-toggle="true">
                  #ID
              </th>
              <th data-toggle="true">
                  Nombre del Centro
              </th>
               <th>Rif</th>
              <th>
                  Correo
              </th> <th>
                  Banco
              </th>
              <th data-hide="phone,tablet">
                  Editar
              </th>
              <th data-hide="phone">
                  Opciones</th>
                  <th>Estado</th>
                  <th>Ver</th>
          </tr>
        </thead>
        <tbody>
           @foreach($centros as $centro)
             <tr>
             <td>{{ $centro->id}}</td>
             <td>{{ $centro->nombre }}</td>
             <td>{{ $centro->rif }}</td>
             <td>{{ $centro->correo }}</td>
             <td>{{ $centro->banco }}</td>
             <td><a href="{{url('/editcentro',['id' => $centro->id,])}}" class="btn btn-warning"  style="color:#fff">Editar</a></td>
             @if($centro->estado == 'Inactivo') 
            <td><a href="{{url('/activecentro',['id' => $centro->id,])}}" class="btn btn-success"  style="color:#fff">Activar</a></td>
            @else
            <td><a href="{{url('/suspendercentro',['id' => $centro->id,])}}" class="btn btn-danger"  style="color:#fff">Suspender</a></td>
            @endif
             <td><label class="label @if($centro->estado == 'Inactivo') danger @else success @endif" title="">{{$centro->estado}}</label></td>
              <td><a href="{{url('/perfilcentro', ['id' => $centro->id,])}}"><i class="fa fa-eye" style="font-size: 20px"></i></a></td>
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
      <a class="btn btn-block btn-warning" href="{{url('/addcentro')}}">Agregar un Centro de Formacion</a>
    </div>
  </div>
</div>



<!-- ############ PAGE END-->


@endsection