@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
      @include('alerts.success')
      @include('alerts.errors')
      <h2>Programas</h2>
      <small>Lista de programas de acuerdo al sector perteneciente</small>
    </div>
    <div>
      <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
               <th data-toggle="true">
                  #ID
              </th>
              <th data-toggle="true">
                  Sector
              </th> <th data-toggle="true">
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
          @foreach($programa as $pro)
          <tr class=" @if($pro->id%2!=0)
                     footable-even
           @else footable-odd @endif">
              <td>{{$pro->id}}</td>
              <td>{{$pro->id_sector}}</td>
              <td>{{$pro->nombre}}</td>
              <td>{{$pro->descripcion}}</td>
              <td><a href="{{url('/editprograma',['id' => $pro->id,])}}" class="btn btn-warning"  style="color:#fff">Editar</a></td>
              @if($pro->estado == 'Inactivo') 
            <td><a href="{{url('/activeprograma',['id' => $pro->id,])}}" class="btn btn-success"  style="color:#fff">Activar</a></td>
            @else
            <td><a href="{{url('/suspenderprograma',['id' => $pro->id,])}}" class="btn btn-danger"  style="color:#fff">Suspender</a></td>
            @endif
             
              <td><label class="label @if($pro->estado == 'Inactivo') danger @else success @endif" title="">{{$pro->estado}}</label></td>
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
      <a class="btn btn-block btn-warning" href="{{url('/addprogramas')}}">Agregar un Programa</a>
      
    </div>
  </div>
</div>



<!-- ############ PAGE END-->
@endsection