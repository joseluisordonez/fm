<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Funerales & Crematorio Modelo</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/color-styles.css" rel="stylesheet">
    <link href="css/ui-elements.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- Resources -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500,400italic,500italic,700italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="body-blue">

    <!-- Extra Bar -->
    <div class="mini-navbar mini-navbar-dark hidden-xs">
      <div class="container">
        <div class="col-sm-12">
          @if (Auth::check())
            <a href="logout" class="pull-right"><i class="fa fa-sign-out"></i> Logout</a>
            <a href="login" class="pull-right"> {{ Auth::user()->name; }}</a>            
          @else
            <a href="login" class="pull-right"><i class="fa fa-sign-in"></i> Login</a>
          @endif
          <span class="phone">
            <i class="fa fa-phone-square"></i> Tel.:  (625) 582.04.50
          </span>
        </div>
      </div>
    </div>

    <div class="navbar navbar-dark navbar-static-top" role="navigation">
      <div class="container">

        <!-- Navbar Header -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navegacion</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hidden-xs" href="{{ URL::to( '/') }}"><img src="img/logo.png" alt=""></a>
        </div> <!-- / Navbar Header -->

        <!-- Navbar Links -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is( '/') ? 'active' : '' }}">
              <a href="{{ URL::to( '/') }}">Inicio</a>
            </li>
            <li class="{{ Request::is( 'quienessomos') ? 'active' : '' }}">
              <a href="quienessomos">Quienes Somos</a>
            </li>
            <li class="{{ Request::is( 'historia') ? 'active' : '' }}">
              <a href="historia">Historia</a>
            </li>
            <li class="dropdown {{ Request::is( 'servicios') ? 'active' : '' }}">
              <a href="#" class="dropdown-toggle bg-hover-color" data-toggle="dropdown">Nuestros Servicios <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="servicios#cremacion" class="bg-hover-color">Cremación</a></li>
                <li><a href="servicios#embalsamado" class="bg-hover-color">Embalsamamiento</a></li>
                <li><a href="servicios#urnas" class="bg-hover-color">Urnas</a></li>
                <li><a href="servicios#ataudes" class="bg-hover-color">Ataúdes</a></li>
                <li><a href="servicios#adicionales" class="bg-hover-color">Servicios Adicionales</a></li>
                
              </ul>
            </li>
            <li class="{{ Request::is( 'contacto') ? 'active' : '' }}"><a href="contacto" class="bg-hover-color">Contacto</a></li>
          </ul>
        </div> <!-- / Navbar Links -->
      </div> <!-- / container -->
    </div> <!-- / navbar -->
    


    	@yield('Contenido')

    

    <!-- Footer -->
    <footer class="footer-dark">
      <div class="container">
        <div class="row">
          <!-- Contact Us -->
          <div class="col-sm-6">
            <h3 class="text-color"><span class="border-color">Contacto</span></h3>
            <div class="content">
              <p>
              Av. Aldama y 4a. No. 662<br />
              Col. Centro<br/>
              Tel: (625) 582-04-50<br />
              Email: <a href="contacto">funeralesmod@prodigy.net.mx</a>
              </p>
            </div>
          </div>
                   
          <!-- Horario -->
          <div class="col-sm-6">
            <h3 class="text-color"><span>Horario</span></h3>
            <div class="content">
              <p>Le atendemos con gusto:<br />Las 24 horas del día<br/> Los 365 días del año.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <hr>
          </div>
        </div>
        <!-- Copyrights -->
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; Funerales y Crematorio Modelo 2015.</p>
          </div>
          <div class="col-sm-6 text-right">
            <a href="http://pepeordonez.com/" target="_blank">pepeordonez.com</a>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrolltopcontrol.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>

</body></html>