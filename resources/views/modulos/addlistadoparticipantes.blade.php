@extends('home')

@section('heads')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
@endsection

@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
      
    <div class="box-header">
      @include('alerts.success')
          @include('alerts.errors')
      <h2>Listado de Participantes</h2>
      <small>Lista de información sobre los participantes a cargar en la base de datos</small>
    </div>
    <div>        
      
        {!!Form::open(['url'=>'/GuardarParticipante/', 'method'=>'POST'])!!}
             {!! csrf_field() !!}     
        
      <label for="exampleInputEmail1">Cohorte a registrar los participantes</label>
       <br>       
            @if($x>0)
                  
                  
                @foreach($cohortes as $cohorte)
                @if($cohorte->id == $x)
        
                    <select name="cohorte" class="form-control">
                        <option> {{$cohorte->id . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Numero del cohorte: " . $cohorte->numero  . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre del cohorte: " . $cohorte->proyecto  . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fecha de Inicio: " . $cohorte->fecha_inicio}} 
                        </option>           
                    </select>            
        
                @endif
                @endforeach
            
            @else
            <select name="cohorte" class="form-control">
                  
                  @forelse($cohortes as $cohorte)
                    @forelse($participante as $participantes)
                    @if($participantes->cohorte == $cohorte->id)
                        @break;
                    @else
                    <option> {{$cohorte->id . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Numero del cohorte: " . $cohorte->numero  . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre del cohorte: " . $cohorte->proyecto  . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fecha de Inicio: " . $cohorte->fecha_inicio}} @break;</option> 
                    @endif
                    @empty
                    <option> {{$cohorte->id . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Numero del cohorte: " . $cohorte->numero  . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre del cohorte: " . $cohorte->proyecto  . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fecha de Inicio: " . $cohorte->fecha_inicio}} </option> 
                    @endforelse
                @empty
                <option>Debes agregar un cohorte para registrar los participantes</option>
                @endforelse
              </select>
            @endif
        
        <select name="t" style="visibility:hidden"><option> {{$path}}</option></select>
        
      <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="5">
        <thead>
          <tr>
               <th data-toggle="true">
                  Nombres
              </th>
              <th data-toggle="true">
                  Apellidos
              </th>
              <th>
                  Cedula
              </th> 
             <!-- <th>
                  Sexo
              </th>
              <th data-hide="phone,tablet">
                  Fecha de Nacimiento
              </th>
              <th data-hide="phone,tablet">
                  Edo. Civil
              </th>
              <th data-hide="phone">
                  Parroquia
              </th> 
              <th data-hide="phone">
                  Nivel Instruccion
              </th>
              <th data-hide="phone">
                  Situacion Empleo                              
              </th>-->
          </tr>
        </thead>
        <tbody>

          @foreach($arrays as $valor)
            <tr>
                <td>{{$valor[0]}}</td>
                <td>{{$valor[2]}}</td>
                <td>{{$valor[5]}}</td>
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

        <button class="btn btn-block btn-warning" type="submit">Agregar los Participantes</button>
            {!!Form::close()!!}
       
    </div>
      
  </div>
</div>



<!-- ############ PAGE END-->


@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script> 
<script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
@endsection