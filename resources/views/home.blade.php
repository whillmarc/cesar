<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>TyP- Sistematización</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/favicon.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/favicon.png">
  
  <!-- style -->
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css" />
  

  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/styles/app.min.css">
  <link rel="stylesheet" href="../assets/styles/font.css" type="text/css" />
   @yield('heads')
</head>
<body style="background-image: url('/assets/images/fondo.jpg');  background-position: center;
      background-size: cover;  background-repeat: no-repeat;">
  <div class="app" id="app" >

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal fade folded md nav-expand">
  	<div class="left navside indigo-900 dk" layout="column">
      <div class="navbar navbar-md no-radius">
        <!-- brand -->
        <a class="" href="{{url('/home')}}">
        	<div ui-include="'../assets/images/logo.svg'"></div>
        	<img src="../assets/images/logoletrasblancas.png" alt="." class="img-responsive">
        </a>
        <!-- / brand -->
      </div>
      <div flex class="hide-scroll">
        <nav class="scroll nav-active-primary" style="font-size: 20px">
          
            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Menu</small>
              </li>
              
              <li>
                <a href="{{url('/sectores')}}" >
                  <span class="nav-icon">
                   <i class="fa fa-braille "></i>
                  </span>
                  <span class="nav-text">Sectores</span>
                </a>
              </li>
                <li>
                <a href="{{url('/programas')}}" >
                  <span class="nav-icon">
                    <i class="fa fa-calendar-plus">
                    </i>
                  </span>
                  <span class="nav-text">Programa</span>
                </a>
              </li>
                <li>
                <a href="{{url('/proyectos')}}" >
                  <span class="nav-icon">
                    <i class="fa fa-clipboard-list"></i>
                  </span>
                  <span class="nav-text">Proyectos</span>
                </a>
              </li>
                <li>
                  <a href="{{url('/cohortes')}}" >
                  <span class="nav-icon">
                  
                    <i class="fa fa-clock"></i>
                  </span>
                  <span class="nav-text">Cohortes</span>
                </a>
              </li>
                <li>
                <a href="{{ url('/participantes') }}" >
                  <span class="nav-icon">
                      <i class="fa fa-child"></i>
                  </span>
                  <span class="nav-text">Participantes</span>
                </a>
              </li>
                 
                <li>
                <a href="{{url('aliados')}}" >
                  <span class="nav-icon">
                    <i class="fab fa-autoprefixer">
                    </i>
                  </span>
                  <span class="nav-text">Aliados</span>
                </a>
              </li> 
              
               <li>
                <a href="{{url('/centros')}}" >
                  <span class="nav-icon">
                    <i class="fas fa-graduation-cap">
                    </i>
                  </span>
                  <span class="nav-text">Centros de Formacion</span>
                </a>
              </li> 
              
              <li>
                <a href="{{url('/tutores')}}" >
                  <span class="nav-icon">
                    <i class="fab fa-tumblr">
                    </i>
                  </span>
                  <span class="nav-text">Tutores</span>
                </a>
              </li> 
              
              <li>
                <a href="{{url('/profesores')}}" >
                  <span class="nav-icon">
                    <i class="fas fa-address-book">
                    </i>
                  </span>
                  <span class="nav-text">Profesores</span>
                </a>
              </li> 
              
              <li>
                <a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                  <span class="nav-icon">
                    <i class="fa fa-plug">
                    </i>
                  </span>
                  <span class="nav-text">Desconectar</span>
                </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                   {{ csrf_field() }}
               </form>
              </li>
          
            </ul>
        </nav>
      </div>
      <div flex-no-shrink>
        <div ui-include="'../views/blocks/aside.bottom.0.html'"></div>
      </div>
    </div>
  </div>
  <!-- / aside -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main"  >
    <div class="app-header white box-shadow navbar-md">
        <div class="navbar">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
        
            <!-- Page title - Bind to $state's title -->
            <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>
        
            <!-- navbar right 
            <ul class="nav navbar-nav pull-right">
              <li class="nav-item dropdown">
                <a class="nav-link clear" href data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="../assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'"></div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
             navbar right -->
        
            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm" id="collapse">
              <div ui-include="'../views/blocks/navbar.form.right.html'"></div>
              <!-- link and dropdown -->
              <ul class="nav navbar-nav  pull-right">
                <li class="nav-item dropdown">
                  <a class="nav-link" href data-toggle="dropdown">
                    <span class=""> Sistematización TyP </span>
                    <img src="/assets/images/unnamed.png">
                  </a>
                  <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                </li>
              </ul>
              <!-- / -->
            </div>
            <!-- / navbar collapse -->
        </div>
      
      
    </div>
    
      
<!-- ############ PAGE START-->
    <br><br><br><br>
    
    @yield('content')

<!-- ############ PAGE END-->
    

    
    <div class="app-footer" style="background-color: #dee4e4">
      <div class="p-a text-xs">
        <div class="pull-right text-muted">
          &copy; Proyecto Financiado por: <img src="/assets/images/BID.png" class="img-resposive">
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
      

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->


<!-- ############ LAYOUT END-->

  </div>
<script src="scripts/app.html.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
   @yield('scripts')
</body>
</html>
