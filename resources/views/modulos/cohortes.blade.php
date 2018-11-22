@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
 @include('alerts.success')
      @include('alerts.errors')
<div class="box">

    <a class="btn btn-block btn-warning" href="{{url('/addcohortes')}}">Registrar nuevo Cohorte</a>
            
</div>
</div>

     

@forelse($proyectos as $proyecto)
@php $sum=0; @endphp
<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>Cohorte: {{$proyecto->nombre}}</h2>
      <small>Lista de información completa sobre los Cohortes de {{$proyecto->nombre}}</small>
    </div>
       
    <div style="margin-bottom: 20px;">        
      <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
               <th data-toggle="true">
                  #ID
              </th>
              <th data-toggle="true">
                  Nombre del proyecto
              </th>
               <th>Numero de corte</th>
              <th>
                  Inicio
              </th> <th>
                  Fin
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Opciones
              </th>
              <th data-hide="phone">
                  Cantidad de Participantes
              </th>            
              <th>
                  Estado
              </th>
              <th data-hide="phone,tablet" data-name="Date Of Birth">
                  Configuracion
              </th>
          </tr>
        </thead>          
        <tbody>
           
            @foreach($cohortes as $cohorte)
            @if($proyecto->nombre==$cohorte->proyecto) 
            <tr>
             <td>{{ $cohorte->id}}</td>
             <td>{{ $cohorte->proyecto }}</td>
             <td>{{ $cohorte->numero }}</td>
             <td>{{ $cohorte->fecha_inicio }}</td>
             <td>{{ $cohorte->fecha_culminacion }}</td>
            
                @forelse ($participantes as $participante)
                    @if($participante->cohorte == $cohorte->id)  
                        <td><a href="{{url('/verParticipanteCorte',['id' => $cohorte->id,])}}" class="btn btn-primary"  style="color:#fff">Ver Participantes</a></td> 
                        <td>
                            <label class="btn">{{$participante->where('cohorte',$participante->cohorte)->count()}}
                            </label>
                        </td>
                        @php
                        
                           $sum += $participante->where('cohorte',$participante->cohorte)->count();
                
                        @endphp
                    @break
                    @else
                        @if ($loop->last)
                            <td><a href="{{url('/addListadoParticipante',['id' => $cohorte->id,])}}" class="btn btn-warning"  name="" style="color:#fff">Agregar Listado</a></td> 
                            <td>
                            <label class="btn" title="">0
                            </label>
                            </td>
                        @endif
                
                    @endif 
                    @empty
                        <td><a href="{{url('/addListadoParticipante',['id' => $cohorte->id,])}}" class="btn btn-warning"  style="color:#fff">Agregar Listado</a></td>
                <td>
                            <label class="btn" title="">0
                            </label>
                        </td>
                @endforelse
              
                <td><label class="label @if($cohorte->estado == 'Inactivo') danger @else success @endif" title="">{{$cohorte->estado}}</label></td> 
             
             @if($cohorte->estado == 'Inactivo') 
            <td><a href="{{url('/activecohorte',['id' => $cohorte->id,])}}" class="btn btn-success"  style="color:#fff">Activar</a></td>
            @else
            <td><a href="{{url('/suspendercohorte',['id' => $cohorte->id,])}}" class="btn btn-danger"  style="color:#fff">Suspender</a></td>
            @endif
             
            
               
          </tr>
            @endif
           
           @endforeach
        </tbody>
        <tfoot class="hide-if-no-paging">
          <tr>
              <td colspan="10" class="text-center">
                  <ul class="pagination" style="font-weight: bold;">Total Participantes  = @php echo $sum; @endphp</ul>
              </td>
          </tr>
        </tfoot>
      </table>
              
        
    </div>
      
  </div>
</div>
@empty

<div class="padding">
  <div class="box">
    <div class="box-header">
      @include('alerts.success')
      @include('alerts.errors')
      <h2>Debe registrar un proyecto ante de crear una cohorte</h2>
      <small>No hay proyectos cargados en la base de datos</small>
    </div>
       
      <a class="btn btn-block btn-warning" href="{{url('/addproyecto')}}">Agregar un Proyecto</a>
        
        
    </div>
      
  
</div>

@endforelse

<!-- ############ PAGE END-->


@endsection

