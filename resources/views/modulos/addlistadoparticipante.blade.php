@extends('home')

@section('heads')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
@endsection

@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
      
      <form action="/addListadoParticipantes" method="post" enctype="multipart/form-data">
        
        {{csrf_field()}}
            <input type="file" name="archivo" id="archivo" class="btn" accept=".csv" />
            
        
        <select name="idcohorte" style="visibility:hidden"><option> {{$idd}}</option></select>
    <div>        
         <input type="submit" class="btn btn-block btn-warning"/>        
    </div>
          
          </form>
      
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