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
          <h2>Modificar Aliado {{$idd->id}}</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <!--<form role="form" action="{{url('/modialiado')}}" method="POST" files="true" enctype="multipart/form-data">
             {!! csrf_field() !!}
             <input type="hidden" name="idc" class="form-control" value="{{$idd->id}}">
            <div class="form-group">
              <label for="exampleInputEmail1">Foto</label>
              <input type="file" name="path" value="{{$idd->path}}">
            </div -->

            {!!Form::open(['url'=>'/modialiado', 'method'=>'POST', 'files' => true])!!}
             {!! csrf_field() !!}
             <input type="hidden" name="idc" class="form-control" value="{{$idd->id}}">
            <div class="form-group">
            {!!Form::label('exampleInputEmail1','Foto')!!}
            {!!Form::file('path')!!}
          </div>
                        
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="ingresa el nombre" value="{{$idd->nombre}}">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Rif</label>
              <input type="text" name="rif" class="form-control" placeholder="ingresa el rif" value="{{$idd->rif}}">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" name="correo" class="form-control" placeholder="ingresa el correo" value="{{$idd->correo}}">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Contraseña</label>
              <input type="password" name="contrasena" class="form-control" placeholder="ingresa la contraseña" value="{{$idd->contrasena}}">
            </div>
            <div class="form-group">
              <label>Tipo de Aliado</label>
                 <select class="form-control" name="tipo">
                   <option>{{$idd->tipo}}</option> 
                   <option>No Financista</option>
                   <option>Co Financista</option>
                   <option>Financista</option>
                 </select>
            </div>
              <div class="form-group">
              <label>Tipo de Rol</label>
                 <select class="form-control" name="rol">
                   <option>{{$idd->rol}}</option>
                   <option>Asociado</option>
                   <option>Certificacion</option>
                   <option>Financiacion Principal</option>
                   <option>Financiacion</option>
                   <option>Pasantia</option>
                 </select>
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
              <label for="exampleInputEmail1">Cuenta</label>
              <input type="text" name="cuenta" class="form-control" placeholder="ingresa el numero de cuenta" value="{{$idd->cuenta}}">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parroquia, municipio o estado</label>
              <input type="text" class="form-control" name="parroquia" placeholder="ingresa tu parroquia, avenida o estado" value="{{$idd->parroquia}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Avenida o calle</label>
              <input type="text" name="avenida" class="form-control" placeholder="ingresa la avenida o calle" value="{{$idd->avenida}}">
              </div>
              <div class="form-group">
                <label>Edificio o casa</label>
                 <select class="form-control" name="tipo_casa">
                    <option>{{$idd->tipo_casa}}</option>
                   <option>Edificio</option>
                   <option>Casa</option>
                 </select>
            </div>
              <div class="form-group">
               <label for="exampleInputEmail1">Numero de Departamento o Casa</label>
               <input type="number" name="numero_casa" class="form-control" placeholder="ingresa el numero de edificio o casa" value="{{$idd->numero_casa}}">
              </div>
              <div class="form-group">
               <label for="exampleInputEmail1">Pagina Web</label>
               <input type="text" name="pagina_web" class="form-control" placeholder="ingresa la pagina web" value="{{$idd->pagina_web}}">
              </div>
            
        
              <div class="form-group">
              <label for="exampleInputEmail1">Red social 1</label>
              <input type="text" name="red_1" class="form-control" placeholder="ingresa la red social 1" value="{{$idd->red_1}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Red social 2</label>
              <input type="text" name="red_2" class="form-control" placeholder="ingresa la red social 2" value="{{$idd->red_2}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Red social 3</label>
              <input type="text" name="red_3" class="form-control" placeholder="ingresa la red social 3" value="{{$idd->red_3}}">
              </div>
              
            <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
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