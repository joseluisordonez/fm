<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Funerales Modelo</title>

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
          <a href="#" class="pull-right"><i class="fa fa-sign-in"></i> Login</a>
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
          <a class="navbar-brand hidden-xs" href="index.html"><img src="img/logo.png" alt=""></a>
        </div> <!-- / Navbar Header -->

        <!-- Navbar Links -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="home" class="bg-hover-color">Inicio</a></li>
            <li><a href="nosotros" class="bg-hover-color">Nosotros</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle bg-hover-color" data-toggle="dropdown">Servicios <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="Crematorio" class="bg-hover-color">Crematorio</a></li>
                <li><a href="Embalsamamiento" class="bg-hover-color">Embalsamamiento</a></li>
                <li><a href="Traslados" class="bg-hover-color">Traslado</a></li>
                <li><a href="Floreria" class="bg-hover-color">Floreria</a></li>
                <li><a href="Futuro" class="bg-hover-color">Funerales a Futuro</a></li>
              </ul>
            </li>
            <li><a href="contacto.html" class="bg-hover-color">Contacto</a></li>
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
          <div class="col-sm-4">
            <h3 class="text-color"><span class="border-color">Contacto</span></h3>
            <div class="content">
              <p>
              Aldama y 4a. No. XXX<br />
              Tel: (625) 581-54-50<br />
              Email: <a href="#">contacto@funeralesmodelo.com</a>
              </p>
            </div>
          </div>
          <!-- Social icons -->
          <div class="col-sm-4">
            <h3 class="text-color"><span>Siguenos en</span></h3>
            <div class="content social">
              <p></p>
              <ul class="list-inline">
                  <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="plus"><i class="fa fa-google-plus"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- Subscribe -->
          <div class="col-sm-4">
            <h3 class="text-color"><span>Horario</span></h3>
            <div class="content">
              <p>Le atendemos con gusto de:<br />Lunes a Sabado de 8am a 6pm</p>
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
          <div class="col-sm-12">
            <p>&copy; Funerales Modelo 2015.</p>
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