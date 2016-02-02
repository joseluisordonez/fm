@extends('base')


@section('Contenido')
<!-- Wrapper -->
    <div class="wrapper">

      <!-- Jumbotron -->
      <div class="main-slideshow">
        <div id="main-slideshow" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <!-- Slide No 1 -->
            <div class="item active">
              <div class="jumbotron first">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <h1 class="animated slideInRight">Funerales a Futuro<br /></h1>
                      <p class="lead animated slideInLeft delay-1">Contamos con excelentes planes a futuro.</p>
                      <a href="servicios#cremacio" class="btn btn-color animated slideInLeft delay-2 ">Ir a</a>             
                    </div>
                    <div class="col-sm-6 hidden-xs">
                      <img class="img-responsive" src="img/logo2.png" alt="...">
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <!-- Slide No 2 -->
            <div class="item">
              <div class="jumbotron second">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <h1 class="text-left animated fadeInDown">Velación</h1>
                      <p class="lead text-left animated fadeInDown delay-1">Cinco capillas de valación <br/> con estacionamiento propio.</p>
                      <div class="text-left animated fadeInDown delay-2">
                        <a class="btn btn-color pull-center">Ir a</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide No 3 -->
            <div class="item">
              <div class="jumbotron third">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <h1 class="animated slideInRight">Traslados<br /></h1>
                      <p class="lead animated slideInLeft delay-1">Dentro del País y al Extrangero</p>
                      <a class="btn btn-color animated slideInLeft delay-2">Ir a</a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                      <img class="img-responsive" src="img/logo2.png" alt="...">
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- / Slide No 3 -->
          </div>
          <!-- Controls -->
          <a class="slideshow-arrow slideshow-arrow-prev bg-hover-color" href="#main-slideshow" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="slideshow-arrow slideshow-arrow-next bg-hover-color" href="#main-slideshow" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div> <!-- / Slideshow -->

      <!-- Intro Text -->
      <div class="container intro">
        <div class="row">
          <div class="col-sm-10">
            <h2 class="text-color">Algún día todos vamos a necesitar un servicio funerario!!!</h2>
            <p class="text-muted">Tramítelo y cómprelo hoy mismo con nuestros planes a futuro</p>
          </div>
          <div class="col-sm-2">
            <a href="futuro" class="btn btn-color btn-lg">Mas Información</a>
          </div>
        </div> <!-- / .row -->

        <hr>

        <!-- Our Services Line 1-->
        <div class="row services">
          <div class="col-sm-4">
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-chevron-right fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Cremación</h3>
                <p class="text-muted">
                  Cada persona decide como quisiera ser despedida  y sabemos la importancia  de honrar su última voluntad. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #2 -->
            <div class="services-item">
              <i class="fa fa-chevron-right fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Embalsamado</h3>
                <p class="text-muted">
                  Es un proceso que ayuda a conservar por más tiempo  y en óptimas condiciones  a la persona que se despide.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #3 -->
            <div class="services-item">
              <i class="fa fa-chevron-right fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Urnas</h3>
                <p class="text-muted">
                  Contamos con diferentes modelos y tamaños.  fabricados en madera, mármol, acero inoxidable y otros materiales.
                </p>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->


        <!-- Our Services Line 2 -->
        <div class="row services">
          <div class="col-sm-4">
            <!-- Service Item #4 -->
            <div class="services-item">
              <i class="fa fa-chevron-right fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Ataudes</h3>
                <p class="text-muted">
                  Contamos con gran variedad de ataudes, desde los tradicionales de madera económica, metalicos y maderas finas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #5 -->
            <div class="services-item">
              <i class="fa fa-chevron-right fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Servicios Adicionales</h3>
                <p class="text-muted">
                  Ponemos a su disposición  una gama de servicios adicionales que harán mas comoda su estancia en la funeraria.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #6 -->
            <div class="services-item">
              <i class="fa fa-chevron-right fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Planes a Futuro</h3>
                <p class="text-muted">
                  Excelente plan para prepararse para ese momento tan dificil.
                </p>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->
        <!-- Portfolio -->
        <h2 class="headline text-color">
          <span class="border-color">Nuestras Instalaciones</span>
        </h2>
        <div class="row portfolio">
          <div class="col-sm-3">
            <!-- Portfolio Item #1 -->
            <div class="portfolio-item">
              <a href="">              
                <img src="img/funeraria.jpg" class="img-responsive" alt="...">
                <div class="mask">
                  Nuestra Funeraria <span class="pull-right"></span>
                </div>   
              </a>           
              <div class="portfolio-desc">
                <h3 class="primary-font">Funerales Modelo</h3>
                <p class="text-muted">
                  Fundado en 1955 por Armando y Tita Maldonado.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <!-- Portfolio Item #2 -->
            <div class="portfolio-item">
              <a href="#">
                <img src="img/capilla1.jpg" class="img-responsive" alt="...">
                <div class="mask">
                  Capillas <span class="pull-right"><span>
                </div>
              </a>
              <div class="portfolio-desc">
                <h3 class="primary-font">Capillas</h3>
                <p class="text-muted">
                  Contamos con cinco capillas de velación con elevador a la planta alta para su mayor comodidad en la planta alta.
                </p>
              </div>
            </div>
          </div>
            <div class="col-sm-3">
            <!-- Portfolio Item #3 -->
            <div class="portfolio-item">
              <a href="#">
                <img src="img/cafeteria.jpg" class="img-responsive" alt="...">
                <div class="mask">
                  Cafeteria <span class="pull-right"><span>
                </div>
              </a>
              <div class="portfolio-desc">
                <h3 class="primary-font">Cafeteria</h3>
                <p class="text-muted">
                  Contamos con una cafeteria en cada piso, con servicio 24 horas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <!-- Portfolio Item #4 -->
            <div class="portfolio-item">
              <a href="#">
                <img src="img/sala.jpg" class="img-responsive" alt="...">
                <div class="mask">
                  Sala de Espera <span class="pull-right"></span>
                </div>
              </a>
              <div class="portfolio-desc">
                <h3 class="primary-font">Salas de Espera</h3>
                <p class="text-muted">
                  Cómodas salas de espera con aire acondicionado y calefacción para que su estancia en nuestras instalaciones sea de la mejor calidad.
                </p>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->

        <!-- Obituario -->
        <h2 class="headline text-color">
          <span class="border-color">Obituario</span>
        </h2>
        @foreach($ObituarioArray as $Obituario)
        <h4 class="headline text-color">Capilla {{$Obituario->capilla}}</h4>
        <div class="row">
          <div class="col-sm-12">
            <h4><strong>{{$Obituario->nombre}}</strong></h4>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
              <strong>Fecha de Fallecimiento:</strong></br>
              {{$Obituario->fallecimiento}}
            </div>
            <div class="col-sm-3">
              <strong>Fecha de Funeral:</strong></br>
              {{$Obituario->fechafuneral}}
            </div>
            <div class="col-sm-3">
            <strong>Panteon:</strong></br>
            {{$Obituario->cementerio}}
          </div>
        </div>
        <h4>Servicio Religioso</h4>
        <div class="row">
        
            <div class="col-sm-3 col-xs-3"><strong>Iglesia:</strong></div>
            <div class="col-sm-2 col-xs-2"><strong>Hora Servicio:</strong></div>
            <div class="col-sm-2 col-xs-2"><strong>Hora Salida:</strong></div>
            <div class="col-sm-2 col-xs-2"><strong>Día Servicio:</strong></div>
            <div class="col-sm-3 col-xs-3"><strong>Domicilio:</strong></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-3">{{$Obituario->iglesia}}</div>
            <div class="col-sm-2 col-xs-2">{{$Obituario->horaservicio}}</div>
            <div class="col-sm-2 col-xs-2">{{$Obituario->salidadeservicio}}</div>
            <div class="col-sm-2 col-xs-2">{{$Obituario->diaservicio}}</div>
            <div class="col-sm-3 col-xs-3">{{$Obituario->domicilioiglesia}}</div>
        </div>
          @if ($Obituario->iglesia2)
        <div class="row">
            <div class="col-sm-3 col-xs-3">{{$Obituario->iglesia2}}</div>
            <div class="col-sm-2 col-xs-2">{{$Obituario->horaservicio2}}</div>
            <div class="col-sm-2 col-xs-2">{{$Obituario->salidadeservicio2}}</div>
            <div class="col-sm-2 col-xs-2">{{$Obituario->diaservicio2}}</div>
            <div class="col-sm-3 col-xs-3">{{$Obituario->domicilioiglesia2}}</div>
        </div>
          @endif
        
        @if ($Obituario->cremacion)
        <h4>Cremación</h4>
        <div class="row">
          <div class="col-sm-3">
            {{$Obituario->cremacion}}
          </div>
          <div class="col-sm-3">
            {{$Obituario->horacremacion}}
          </div>
        </div>
        @endif
        @if ($Obituario->observaciones)
        <h4>Observaciones</h4>
        <div class="row">
          <div class="col-sm-12">
            {{$Obituario->observaciones}}
          </div>
        </div>
        @endif
        @endforeach
        <!-- / .row -->

      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->
    
@stop