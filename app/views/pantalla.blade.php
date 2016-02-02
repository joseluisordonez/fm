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
    <link href="css/pantalla.css" rel="stylesheet">
    
    <!-- Resources -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>-->
    <link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <img class="img-responsive logopantalla" src="img/logo2.png" alt="...">
    <div class="main-slideshow-pantalla">



      <div id="pantalla" class="carousel slide" data-ride="carousel" data-interval="38000" data-pause="false">
          <!-- Indicators 
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>-->

          <!-- carousel -->
          <div class="carousel-inner" role="listbox">
            {{--*/$x=0/*--}}
            @foreach($ObituarioArray as $Obituario)
              @if ($x==0)
                <div class="item active">
              @else
                <div class="item">    
              @endif
                <h3 class="label label-default margin100 animated fadeInLeft delay-3" > <strong>CAPILLA {{$Obituario->capilla}}</strong></h3>
                <h1 class="border-color margin100 animated fadeInLeft delay-2" > {{$Obituario->nombre}}</h1>
                <hr class=" container animated fadeInUp delay-4">
                  <div class="row">
                    <div class="divs">
                      <strong class=" text-color animated fadeInLeft delay-5">Fecha de Fallecimiento:</strong></br>
                      <p class="animated fadeInUp delay-6">{{$Obituario->fallecimiento}}</p>
                    </div>
                    <div class="divs">
                      <strong class=" text-color animated fadeInLeft delay-5">Fecha de Funeral:</strong></br>
                      <p class="animated fadeInUp delay-6">{{$Obituario->fechafuneral}}</p>
                    </div>
                  </div>
                   <h4 class="label label-default animated fadeInLeft delay-7">SERVICIOS RELIGIOSOS</h4>
                  <div class="row">       
                      <div class="col-sm-3 animated fadeInLeft delay-8"><strong>Iglesia:</strong></div>
                      <div class="col-sm-2 animated fadeInLeft delay-8"><strong>Hora Salida:</strong></div>
                      <div class="col-sm-2 animated fadeInLeft delay-8"><strong>Hora:</strong></div>                      
                      <div class="col-sm-2 animated fadeInLeft delay-8"><strong>Día:</strong></div>
                      <div class="col-sm-3 animated fadeInLeft delay-8"><strong>Domicilio:</strong></div>
                  </div>
                  <div class="row texto22">
                      <div class="col-sm-3 animated fadeInUp delay-9">{{$Obituario->iglesia}}</div>
                      <div class="col-sm-2 animated fadeInUp delay-9">{{$Obituario->salidadeservicio}}</div>
                      <div class="col-sm-2 animated fadeInUp delay-9">{{$Obituario->horaservicio}}</div>                      
                      <div class="col-sm-2 animated fadeInUp delay-9">{{$Obituario->diaservicio}}</div>
                      <div class="col-sm-3 animated fadeInUp delay-9">{{$Obituario->domicilioiglesia}}</div>
                  </div>
                  @if ($Obituario->iglesia2)
                  <div class="row texto22">
                      <div class="col-sm-3 animated fadeInUp delay-9">{{$Obituario->iglesia2}}</div>
                      <div class="col-sm-2 animated fadeInUp delay-9">{{$Obituario->salidadeservicio2}}</div>
                      <div class="col-sm-2 animated fadeInUp delay-9">{{$Obituario->horaservicio2}}</div>                      
                      <div class="col-sm-2 animated fadeInUp delay-9">{{$Obituario->diaservicio2}}</div>
                      <div class="col-sm-3 animated fadeInUp delay-9">{{$Obituario->domicilioiglesia2}}</div>
                  </div>
                  @endif

                  @if($Obituario->cremacion)
                   </br>
                  <h4 class="label label-default animated fadeInLeft delay-10">CREMACIÓN</h4>
                  <div class="row">
                    <div class="divs animated fadeInUp delay-11">{{$Obituario->cremacion}}</div>
                    <div class="divs animated fadeInUp delay-11">{{$Obituario->horacremacion}}</div>
                  </div>
                  @else
                  </br>
                  <h4 class="label label-default animated fadeInLeft delay-10">PANTEÓN</h4>
                  <div class="row">
                    <div class="divs animated fadeInUp delay-11">{{$Obituario->cementerio}}</div>
                  </div>
                  @endif
                  @if($Obituario->observaciones)
                   </br>
                   <h4 class="label label-default animated fadeInLeft delay-11">OBSERVACIONES</h4>
                  <div class="row">
                    <div class="col-sm-12 animated fadeInUp delay-12">{{$Obituario->observaciones}}</div>
                  </div>
                  @endif
              </div>
              @if(count($ObituarioArray) > 2)
                <div class="item">
                {{--*/$y=3/*--}}
                @foreach ($ObituarioArray as $Obituario2 )
                  <div class="row text-center">
                    <h3 class="label label-default animated fadeInLeft delay-{{$y}}">CAPILLA {{$Obituario2->capilla}}</h3>
                    <h2 class="animated fadeInUp delay-{{$y}}">{{$Obituario2->nombre}}</h2>
                    <hr width="30%" class="animated fadeInDown delay-{{$y+2}}"></hr>
                  </div>
                  {{--*/$y=$y+2/*--}}
                @endforeach
                </div>
              @endif
              {{--*/$x++/*--}}
            @endforeach  
            <div class="item">
              <div class="row text-center marginpagina">
                <h1 class="animated bounceIn delay-5">www.funeralesmodelo.com</h1>
              </div>
            </div>  
          </div>
          <!-- Controls -->
          <!--<a class="left carousel-control" href="#pantalla" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#pantalla" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>-->
        </div>



    </div>
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrolltopcontrol.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>
    
    <!-- scripts para mover el carousel -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
   
    
</body></html>