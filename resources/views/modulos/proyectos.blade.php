@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
      @include('alerts.success')
      @include('alerts.errors')
      <h2>Proyectos</h2>
      <small>Lista de información completa sobre los proyectos</small>
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
                  Inicio
              </th> <th>
                  Fin
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
          @foreach($proyectos as $proyect)
          <tr class=" @if($proyect->id%2!=0)
                     footable-even
           @else footable-odd @endif">
              <td>{{$proyect->id}}</td>
              <td>{{$proyect->nombre}}</td>
              <td>{{$proyect->fecha_i}}</td>
              <td>{{$proyect->fecha_f}}</td>
              <td><a href="{{url('/editproyect',['id' => $proyect->id,])}}" class="btn btn-warning"  style="color:#fff">Editar</a></td>
              @if($proyect->estado == 'Inactivo') 
            <td><a href="{{url('/activeproyect',['id' => $proyect->id,])}}" class="btn btn-success"  style="color:#fff">Activar</a></td>
            @else
            <td><a href="{{url('/suspenderproyect',['id' => $proyect->id,])}}" class="btn btn-danger"  style="color:#fff">Suspender</a></td>
            @endif
             
              <td><label class="label @if($proyect->estado == 'Inactivo') danger @else success @endif" title="">{{$proyect->estado}}</label></td>
              <td><a href="{{url('/perfilproyecto',['id' => $proyect->id,])}}" ><i class="fa fa-eye" style="font-size: 20px"></i></a></td>
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
      <a class="btn btn-block btn-warning" href="{{url('/addproyecto')}}">Agregar un Proyecto</a>
    </div>
  </div>
</div>



<!-- ############ PAGE END-->


@endsection