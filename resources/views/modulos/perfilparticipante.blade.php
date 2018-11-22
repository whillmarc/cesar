@extends('home')
@section('content')

<!-- ############ PAGE START-->

  <div class="item">
    <div class="item-bg">
      <img src="../assets/images/naranja2.jpg" class="blur">
    </div>
    <div class="p-a-md">
      <div class="row m-t">
        <div class="col-sm-7">
          <a href class="pull-left m-r-md">
            <span class="avatar w-96">
              <img src="/movie/{{$idd->path}}">
              <i class="on b-white"></i>
            </span>
          </a>
          <div class="clear m-b">
            <h3 class="m-a-0 m-b-xs">{{$idd->primer_nombre}} {{$idd->primer_apellido}}</h3>
            <p class="text-muted"><i class="fas fa-envelope-square"></i><span class="m-r"><strong> correo:</strong> </span><strong>{{$idd->correo}}</strong></p>
           
          </div>
        </div>
        <div class="col-sm-5">
              <h4>
                Perfil del Participante <hr/>
                
          </h4>
          <p class="text-md profile-status">{{$idd->objetivo_p}}</p>
             
        </div>
      </div>
    </div>
  </div>
  <div class="dker p-x">
    <div class="row">
      <div class="col-sm-6 push-sm-6">
        
      </div>
      <div class="col-sm-6 pull-sm-6">
        <div class="p-y-md clearfix nav-active-primary">
          <ul class="nav nav-pills nav-sm">
            <li class="nav-item ">
              <h4>Descripcion del Participante</h4>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="padding" style="border: 1px solid gray;">
  
      
      <div class="container">
            <div class="row justify-content-center">
              <!--<div class="col-xs-3">
                <small class="text-muted">Fecha de Registro</small>
                <div class="_500">{{$idd->created_at}}</div>
              </div> -->
              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Fecha de Registro</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->created_at}}</p>
                </div>
              </div>
            </div>

             <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Ultima Conexion</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->updated_at}}</p>
                </div>
              </div>
            </div>


              <!--<div class="col-xs-3">
                <small class="text-muted">Ultima conexi&oacute;n</small>
                <div class="_500">{{$idd->updated_at}}</div>
              </div> -->            
              

              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Cedula</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->cedula}}</p>
                </div>
              </div>
            </div>

              <!--<div class="col-xs-3">
                <small class="text-muted">Cedula</small>
                <div class="_500">{{$idd->cedula}}</div>
              </div>--> 

            <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Estado Civil</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->estado_civil}}</p>
                </div>
              </div>
            </div>

              <!--<div class="col-xs-3">
                <small class="text-muted">Estado Civil</small>
                <div class="_500">{{$idd->estado_civil}}</div>
              </div>-->



            </div>
      </div>

 
    <hr>
       
      
      <div class="container">
            <div class="row justify-content-center">
              
              <!--<div class="col-xs-3">
                <small class="text-muted">Lugar de Nacimiento</small>
                <div class="_500">{{$idd->lugar_nacimiento}}</div>
              </div>-->
              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Lugar de Nacimiento</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->lugar_nacimiento}}</p>
                </div>
              </div>
            </div>

              <!--<div class="col-xs-3">
                <small class="text-muted">Telefono Movil</small>
                <div class="_500">{{$idd->telefono_movil1}}</div>
              </div>-->
              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Telefono Movil</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->telefono_movil1}}</p>
                </div>
              </div>
            </div>  

              <!--<div class="col-xs-3">
                <small class="text-muted">Nivel de Instruccion</small>
                <div class="_500">{{$idd->nivel_instruccion}}</div>
              </div>-->
              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Nivel de Instruccion</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->nivel_instruccion}}</p>
                </div>
              </div>
            </div> 

              <!--<div class="col-xs-3">
                <small class="text-muted">Facebook</small>
                <div class="_500">{{$idd->facebook}}</div>
              </div>-->

              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Facebook</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->facebook}}</p>
                </div>
              </div>
            </div> 

            </div>
      </div>



    <hr>


      
      <div class="container">
            <div class="row justify-content-center">
              
              <!--<div class="col-xs-3">
                <small class="text-muted">Lugar de Nacimiento</small>
                <div class="_500">{{$idd->lugar_nacimiento}}</div>
              </div>-->
              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Fecha de Nacimiento</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->fecha_nacimiento}}</p>
                </div>
              </div>
            </div>

              <!--<div class="col-xs-3">
                <small class="text-muted">Telefono Movil</small>
                <div class="_500">{{$idd->telefono_movil1}}</div>
              </div>-->
              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Telefono Local</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->telefono_local}}</p>
                </div>
              </div>
            </div>  

              <!--<div class="col-xs-3">
                <small class="text-muted">Nivel de Instruccion</small>
                <div class="_500">{{$idd->nivel_instruccion}}</div>
              </div>-->
              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Experiencia Laboral</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->experiencia_laboral}} año(s)".</p>
                </div>
              </div>
            </div> 

              <!--<div class="col-xs-3">
                <small class="text-muted">Facebook</small>
                <div class="_500">{{$idd->facebook}}</div>
              </div>-->

              <div class="col-xs-3">
              <div class="card text-white text-center mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #F1C40F;">Nacionalidad</div>
                <div class="card-body">
                <p class="card-text" style="color: black;">{{$idd->nacionalidad}}</p>
                </div>
              </div>
            </div> 

            </div>
      </div>



  </div>

<!-- ############ PAGE END-->
@endsection