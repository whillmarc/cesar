@extends('home')
@section('content')
<div class="padding">
	<div class="margin">
		<h5 class="m-b-0 _300">Hola {{Auth::user()->name}}, Bienvenido de Nuevo</h5>
		<small class="text-muted">Sistematizaci&oacute;n TyP</small>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-5 col-lg-4">
			<div class="row">
				<div class="col-xs-6">
			        <div class="box p-a">
			          <div class="pull-left m-r">
			          	<i class="fa fa-braille text-2x text-danger m-y-sm"></i>
			          </div>
			          <div class="clear">
			          	<div class="text-muted">Sectores Activos</div>
			            <h4 class="m-a-0 text-md _600"><a href>{{$sector_activo}}</a></h4>
			          </div>
			        </div>
			    </div>
			    <div class="col-xs-6">
			        <div class="box p-a">
			          <div class="pull-left m-r">
			          	<i class="fa fa-comments text-2x text-info m-y-sm"></i>
			          </div>
			          <div class="clear">
			          	<div class="text-muted">Beneficiarios Directos e Indirectos</div>
			            <h4 class="m-a-0 text-md _600"><a href>0</a> - <a href>0</a></h4>
			          </div>
								
			        </div>
			    </div>
			    <div class="col-xs-6">
			        <div class="box p-a">
			          <div class="pull-left m-r">
			          	<i class="fa fa-clock text-2x text-accent m-y-sm"></i>
			          </div>
			          <div class="clear">
			          	<div class="text-muted">Horas de Formaci&oacute;n</div>
			            <h4 class="m-a-0 text-md _600"><a href>0</a></h4>
			          </div>
			        </div>
			    </div>
			    <div class="col-xs-3">
			        <div class="box p-a">
			          <div class="pull-left m-r">
			          	<i class="fa fa-male text-2x text-success m-y-sm"></i>
			          </div>
			          <div class="clear">
			          	<div class="text-muted">Hombres</div>
			            <h1 class="m-a-0 text-md _600"><a href>{{$p_hombre}}</a></h1>
			          </div>
			        </div>
			    </div>
				  <div class="col-xs-3">
			        <div class="box p-a">
			          <div class="pull-left m-r">
			          	<i class="fa fa-female text-2x text-accent m-y-sm"></i>
			          </div>
			          <div class="clear">
			          	<div class="text-muted">Mujeres</div>
			            <h4 class="m-a-0 text-md _600"><a href>{{$p_mujer}}</a></h4>
			          </div>
			        </div>
			    </div>
			    <div class="col-xs-12">
			        <div class="row-col box-color text-center primary">
			          <div class="row-cell p-a">
			            Total Participantes
			            <h4 class="m-a-0 text-md _600"><a href>{{$participante_total}}</a></h4>
			          </div>
			        </div>
			    </div>
                
                
                <div class="col-xs-12">
                    
                    
	        <div class="box">
	          <div class="box-header">
	            <h3>Cobertura TyP en Venezuela</h3>
	            <small>Calculado en los Ultimos 7 dias</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18">&#xe863;</i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18">&#xe5d4;</i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href>Esta Semana</a>
		              <a class="dropdown-item" href>Este Mes</a>
		              <a class="dropdown-item" href>Esta Semana</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Hoy</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="text-center b-t">
	            <div class="row-col">
	              <div class="row-cell p-a">
	                <div class="inline m-b">
	                  <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw='true' data-percent="55" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#0cc2aa',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
	                    <div>
	                      <h5>75%</h5>
	                    </div>
	                  </div>
	                </div>
	                <div>
	                	Alcanzada
	                	<small class="block m-b">320</small>
	                	<a href class="btn btn-sm white rounded">Gestionar</a>
	                </div>
	              </div>
	              <div class="row-cell p-a dker">
	                <div class="inline m-b">
	                  <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw='true' data-percent="45" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#fcc100',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
	                    <div>
	                      <h5>25%</h5>
	                    </div>
	                  </div>
	                </div>
	                <div>
	                	Restante
	                	<small class="block m-b">205</small>
	                	<a href class="btn btn-sm white rounded">Gestionar</a>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
			
                    
                </div>
                
                
                
                
		    </div>
	    </div>
	    <div class="col-sm-12 col-md-7 col-lg-8">
	    	<div class="row-col box bg">
		        <div class="">
	        		<div class="box-header">
			          <img src="movie/AreasAccionTyP2013.png" width="100%" height="250px">
			        </div>
		        </div>
		    </div>
	    </div>
        <div class="col-sm-12 col-md-7 col-lg-8">
	    	<div class="row-col box bg">
		        <div class="col-sm-6">
					<div class="box-header">
						<img src="movie/emprender360.png" width="100%" height="245px">
					</div>
		        </div>
                <div class="col-sm-6">
					<div class="box-header">
						<img src="movie/emprender.png" width="100%" height="245px">
					</div>
		        </div>
		    </div>
	    </div>
        
	</div>
	<div class="row">
	    <div class="col-md-6 col-xl-4">	
	        <div class="box light lt">
	            <div class="box-header">
	              <span class="label success pull-right">{{$usuarios_totales}}</span>
	              <h3>Usuarios</h3>
	            </div>
	            <ul class="list no-border p-b">
	            	@foreach($usuarios as $usuario)
	              <li class="list-item">
	                <a herf class="list-left">
	                	<span class="w-40 avatar danger">
		                  <span>C</span>
		                  <i class="on b-white bottom"></i>
		                </span>
	                </a>
	                <div class="list-body">
	                  <div><a href>{{$usuario->name}}</a></div>
	                  <small class="text-muted text-ellipsis">{{$usuario->email}}</small>
	                </div>
	              </li>
	              @endforeach
	              
	             
	            </ul>
	        </div>
				
			<div class="box">
				<div class="box-header">
					<h3>Proyectos</h3>
					<small>Cantidad {{$proyecto_total}}</small>
				</div>
				<div class="box-tool">
			        <ul class="nav">
			          <li class="nav-item inline dropdown">
			            <a class="nav-link text-muted p-x-xs" data-toggle="dropdown">
			              <i class="fa fa-ellipsis-v"></i>
			            </a>
			            <div class="dropdown-menu dropdown-menu-scale pull-right">
			              <a class="dropdown-item" href>Nueva Tarea</a>
			              <a class="dropdown-item" href>Hacer todo terminado</a>
			              <a class="dropdown-item

                    " href>Hacer todo sin terminar</a>
			              <div class="dropdown-divider"></div>
			              <a class="dropdown-item">Configuraciones</a>
			            </div>
			          </li>
			        </ul>
			    </div>
				<div class="box-body">
				  	<div class="streamline b-l m-l">
				        <div class="sl-item b-success">
				          <div class="sl-icon">
				            <i class="fa fa-check"></i>
				          </div>
				          @foreach($proyecto as $p)
				          <div class="sl-content">
				            <div class="sl-date text-muted">Fecha de Creación: {{$p->created_at}}</div>
				            <div>Nombre: {{$p->nombre}}</div>
				          </div>
				          @endforeach
				        </div>
				        
				    
				    </div>
				</div>
			  	<div class="box-footer">
			  		<a href="{{url('/addproyecto')}}" class="btn btn-sm btn-outline b-info rounded text-u-c pull-right">Agrega uno</a>
			  		<a href="{{url('/proyectos')}}" class="btn btn-sm white text-u-c rounded">Más</a>
			  	</div>
		  	</div>
	    </div>
	    <div class="col-md-6 col-xl-8">
	    	<div class="box">
	          <div class="box-header">
	            <h3>TyP Venezuela</h3>
	            <small>(ver mapa)</small>
	          </div>
	          <div class="box-tool">
		      </div>
					<div class="embed-responsive embed-responsive-4by3">
							<img src="/assets/images/mapadealcancetyp.jpg" class="img-responsive">
</div>
	        </div>
	    </div>
	</div>
</div>
@endsection