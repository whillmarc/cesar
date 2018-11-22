@extends('home')
@section('content')

<!-- ############ PAGE START-->

<a class="btn btn-block btn-warning" href="{{url('/addListadoParticipante',['id' => 0,])}}">Cargar un listado de Participantes</a>

@forelse($proyectos as $proyecto)
@php

$sum = 0;
@endphp
<div class="padding">
  <div class="box">
    <div class="box-header">
      @include('alerts.success')
          @include('alerts.errors')
      <h2>Sector: {{$proyecto->nombre}}</h2>
      <small></small>
    </div>
    <div>
        
        <div style="margin-bottom: 20px;">        
      <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
              <th data-toggle="true">
                  Nombre del proyecto
              </th>
               <th data-toggle="true">
                   Numero de corte
              </th>
              <th>
                  Cantidad de Participantes
              </th> 
              <th data-hide="phone,tablet" data-name="">
                  Mujeres
              </th>
              <th data-hide="phone,tablet" data-name="">
                  Hombres
              </th>
              <th data-hide="phone,tablet" data-name="">
                  Ver Participantes
              </th>
          </tr>
        </thead> 
                  
        <tbody>
           
            @foreach($cohortes as $cohorte)
            @if($proyecto->nombre==$cohorte->proyecto) 
            <tr>
             <td>{{ $cohorte->proyecto }}</td>
             <td>{{ $cohorte->numero }}</td>            
                @forelse ($participantes as $participante)
                    @if($participante->cohorte == $cohorte->id)
                        <td>     
                            <label class="btn">
                                {{$participante->where('cohorte',$participante->cohorte)->count()}}
                            </label>
                        </td>
                        @php
                        
                           $sum += $participante->where('cohorte',$participante->cohorte)->count();
                
                        @endphp
                        <td>     
                            <label class="btn">
                                {{$participante->where('sexo','Femenino')->where('cohorte',$participante->cohorte)->count()}}
                            </label>
                        </td>
                        <td>     
                            <label class="btn">
                                {{$participante->where('sexo','Masculino')->where('cohorte',$participante->cohorte)->count()}}
                            </label>
                        </td>
                        <td>
                            <a href="{{url('/ParticipanteListado',['id' => $cohorte->id,])}}" >
                                <i class="fa fa-eye" style="font-size: 20px"></i>
                            </a>
                        </td>
                    @break
                    @else
                        @if ($loop->last)
                            <td>
                            <label class="btn" title="">
                                0
                            </label>
                            </td>
                            <td>
                            <label class="btn" title="">
                                0
                            </label>
                            </td>
                            <td>
                            <label class="btn" title="">
                                0
                            </label>
                            </td>
                        @endif
                
                    @endif 
                    @empty
                        <td>
                            <label class="btn" title="">
                                0
                            </label>
                        </td>
                        <td>
                            <label class="btn" title="">
                                0
                            </label>
                            </td>
                            <td>
                            <label class="btn" title="">
                                0
                            </label>
                            </td>
                @endforelse  
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
</div>
@empty

<div class="alert alert-warning" role="alert">
    No hay participantes registrados
</div>

@endforelse


<!-- ############ PAGE END-->


@endsection