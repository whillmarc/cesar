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
          <h2>Agregar Aliados</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
         <!-- <form role="form" action="{{url('/registroaliado')}}" method="POST" files="true" enctype="multipart/form-data">-->
            {!!Form::open(['url'=>'/registroaliado', 'method'=>'POST', 'files' => true])!!}
             {!! csrf_field() !!}
 
            <div class="form-group">
            {!!Form::label('exampleInputEmail1','Foto')!!}
            {!!Form::file('path')!!}
          </div>
                        
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="ingresa el nombre">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Rif</label>
              <input type="text" name="rif" class="form-control" placeholder="ingresa el rif">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" name="correo" class="form-control" placeholder="ingresa el correo">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Contraseña</label>
              <input type="password" name="contrasena" class="form-control" placeholder="ingresa la contraseña">
            </div>
            <div class="form-group">
              <label>Tipo de Aliado</label>
                 <select class="form-control" name="tipo">
                   <option>No Financista</option>
                   <option>Co Financista</option>
                   <option>Financista</option>
                 </select>
            </div>
              <div class="form-group">
              <label>Tipo de Rol</label>
                 <select class="form-control" name="rol">
                   <option>Financiación y Firma Principal</option>
                   <option>Formación</option>
                   <option>Otros</option>
                 </select>
            </div>
              <div class="form-group">
              <label>Banco</label>
                 <select class="form-control" name="banco">
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
              <input type="text" name="cuenta" class="form-control" placeholder="ingresa el numero de cuenta">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parroquia, municipio o estado</label>
              <input type="text" class="form-control" name="parroquia" placeholder="ingresa tu parroquia, avenida o estado">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Avenida o calle</label>
              <input type="text" name="avenida" class="form-control" placeholder="ingresa la avenida o calle">
              </div>
              <div class="form-group">
                <label>Edificio o casa</label>
                 <select class="form-control" name="tipo_casa">
                   <option>Edificio</option>
                   <option>Casa</option>
                 </select>
            </div>
              <div class="form-group">
               <label for="exampleInputEmail1">Numero de Departamento o Casa</label>
               <input type="number" name="numero_casa" class="form-control" placeholder="ingresa el numero de edificio o casa">
              </div>
              <div class="form-group">
               <label for="exampleInputEmail1">Pagina Web</label>
               <input type="text" name="pagina_web" class="form-control" placeholder="ingresa la pagina web">
               <small>La pagina debe contener el siguiente formato https://www.ejemplo.com</small>
              </div>
            
        
              <div class="form-group">
              <label for="exampleInputEmail1">Red social 1</label>
              <input type="text" name="red_1" class="form-control" placeholder="ingresa la red social 1">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Red social 2</label>
              <input type="text" name="red_2" class="form-control" placeholder="ingresa la red social 2">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Red social 3</label>
              <input type="text" name="red_3" class="form-control" placeholder="ingresa la red social 3">
              </div>
              
            <button type="submit" class="btn btn-warning btn-block">Agregar</button>
            <a type="button" href="{{url('/aliados')}}" class="btn btn-danger btn-block">Cancelar</a>
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