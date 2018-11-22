@extends('home')

@section('heads')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
@endsection

@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
    @include('alerts.request')
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Modificar Centro de Formacion</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <!--<form role="form" action="{{url('/modicentro')}}" method="POST" files="true" enctype="multipart/form-data">
             {!! csrf_field() !!}
              <input type="hidden" name="idc" class="form-control" value="{{$idd->id}}">          
            <div class="form-group">
              <label for="exampleInputEmail1">Logotipo</label>
              <input type="file" class="form-control" name="path" value="{{$idd->path}}">
            </div> -->

           {!!Form::open(['url'=>'/modicentro', 'method'=>'POST', 'files' => true])!!}
             {!! csrf_field() !!}
                         <input type="hidden" name="idc" class="form-control" value="{{$idd->id}}">          
            <div class="form-group">
            {!!Form::label('exampleInputEmail1','Logotipo')!!}
            {!!Form::file('path')!!}
          </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" value="{{$idd->nombre}}">
            </div>
          
            <div class="form-group">
              <label for="exampleInputPassword1">Rif</label>
              <input type="text" name="rif" class="form-control" placeholder="Ingrese el rif" value="{{$idd->rif}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Correo</label>
              <input type="email" name="correo" class="form-control" placeholder="Ingrese el correo" value="{{$idd->correo}}">
            </div>
            
              <div class="form-group">
              <label for="exampleInputEmail1">Contrasena</label>
              <input type="password" name="contrasena" class="form-control" placeholder="Ingrese la contraseña" value="{{$idd->contrasena}}">
            </div>

                    <div class="form-group">
              <label>Banco</label>
                 <select class="form-control" name="banco">
                   <option>{{$idd->banco}}</option>
                   <option>Banco Central de Venezuela</option>
                   <option>Banco de Venezuela S.A.C.A. Banco Universal</option>
                   <option>Venezolano de Credito,S.A. Banco Universal</option>
                   <option>Banco Mercantil,C.A. Banco Universal</option>
                   <option>Banco Provincial,S.A. Banco Universal</option>
                   <option>Bancaribe,C.A. Banco Universal</option>
                   <option>Banco Exterior,C.A. Banco Universal</option>
                   <option>Banco Occidental del Descuento. Banco Universal C.A</option>
                   <option>Banco Caroni,C.A. Banco Universal</option>
                   <option>Banesco Banco Universal S.A.C.A</option>
                   <option>Banco Sofitasa.Banco Universal</option>
                   <option>Banco Plaza.Banco Universal</option>
                   <option>Banco de la Gente Emprendedora C.A</option>
                   <option>BFC Banco Fondo Comun C.A. Banco Universal</option>
                   <option>100% Banco, Banco Universal C.A</option>
                   <option>DelSur Banco Universal C.A</option>
                   <option>Banco Agricola de Venezuela,C.A. Banco Universal</option>
                   <option>Bancrecer,S.A. Banco Microfinanciero</option>
                 </select>
            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">Numero de Cuenta</label>
              <input type="text" name="cuenta" class="form-control" value="{{$idd->cuenta}}" placeholder="Ingresa el numero de cuenta">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Condiciones clase</label>
              <input type="text" name="condicion" class="form-control" placeholder="Ingresa tus condiciones clase" value="{{$idd->condicion}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Observaciones</label>
              <textarea class="form-control" name="observaciones" placeholder="Ingresa tus observaciones">{{$idd->observaciones}}</textarea>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Parroquia, avenida o estado</label>
              <input type="text" name="parroquia" class="form-control" placeholder="Ingresa tu parroquia, avenida o estado" value="{{$idd->parroquia}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Avenida o calle</label>
              <input type="number" name="avenida" class="form-control" placeholder="Ingrese el nombre de la avenida o calle" value="{{$idd->avenida}}">
            </div>
           
             <div class="form-group">
               <label>Edificio o Casa</label>
               <select class="form-control" name="tipo_casa">
                 <option>{{$idd->tipo_casa}}</option>
                 <option>Edificio</option>
                 <option>Casa</option>
               </select>
             </div>

            

            <div class="form-group">
              <label for="exampleInputEmail1">Numero de casa o apartamento</label>
              <input type="number" name="numero_casa" class="form-control" value="{{$idd->numero_casa}}">
            </div>

            <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
            <a type="button" href="{{url('/centros')}}" class="btn btn-danger btn-block">Cancelar</a>
          <!-- </form> -->
           {!!Form::close()!!}
        </div>
      </div>
    </div>
    
  </div>
</div>
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