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
                      <h1 class="animated slideInRight">Funerales Modelo<br /></h1>
                      <p class="lead animated slideInLeft delay-1">Acompañandote en los momentos más dificiles.</p>
                      <a class="btn btn-color animated slideInLeft delay-2">Ir a</a>
                    </div>
                    <div class="col-sm-6">
                         <div class="video hidden-xs">
                        <div class="flex-video">
                          <iframe src="http://www.youtube.com/embed/KebQ3XOAR5A" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>                
                      </div>             
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
                      <h1 class="text-center animated fadeInDown">Velación</h1>
                      <p class="lead text-center animated fadeInDown delay-1">Tres capillas para su comodidad.</p>
                      <div class="text-center animated fadeInDown delay-2"><a class="btn btn-color pull-center">Ir a</a></div>
                      <img class="img-responsive hidden-xs" src="img/capilla.png" alt="...">
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
                      <p class="lead animated slideInLeft delay-1">Contamos con una gran variedad de<br />vehiculos para el traslado.</p>
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
            <!-- Service Item #1 -->
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
            <!-- Service Item #1 -->
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
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-chevron-right fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Ataudes</h3>
                <p class="text-muted">
                  Contamos con gran variedad de ataudes, desde los tradicionales de madera hasta metalicos, doble tapa, etc.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #1 -->
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
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-chevron-right fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Planes a Futuro</h3>
                <p class="text-muted">
                  Excelente plan para prepararse para ese momento tan dificil, desde $31,968.00
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
                  Desde Fuera <span class="pull-right"></span>
                </div>   
              </a>           
              <div class="portfolio-desc">
                <h3 class="primary-font">Funerales Modelo</h3>
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven
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
                  Nuestras capillas cuentan con lo mejor en 
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
                  Contamos con una cafeteria en cada piso para su mayor comodidad
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
                  Nuestras salas de espera cuentan con aire acondicionado y etc etc
                </p>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->

        <!-- Blog Posts -->
        <h2 class="headline text-color">
          <span class="border-color">Obituario</span>
        </h2>
        <!--<div class="row recent-blogs">
          <div class="col-sm-4">
            <div class="recent-blog">
              <img src="img/photo-1.jpg" alt="...">
              <div class="recent-blog-desc">
                <h3 class="primary-font">
                  <a href="#">José Luis Ordoñez Macias </a>
                </h3>
                <hr>
                <p class="text-muted">Capilla 1</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, repellendus voluptatibus eius qui velit mpedit dignissimos?<br/>Misa: Catedral <br/> Hora: 3:00pm <br/> etc.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="recent-blog">
              <img src="img/photo-1.jpg" alt="...">
              <div class="recent-blog-desc">
                <h3 class="primary-font">
                  <a href="#">Pedro Perez Perez</a>
                </h3>
                <hr>
                <p class="text-muted">Capilla 2</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, repellendus voluptatibus eius qui velit impedit dignissimos?<br/>Misa: Catedral <br/> Hora: 3:00pm <br/> etc.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="recent-blog">
              <img src="img/photo-1.jpg" alt="...">
              <div class="recent-blog-desc">
                <h3 class="primary-font">
                  <a href="#">Noel Chaparro Flores</a>
                </h3>
                <hr>
                <p class="text-muted">Capilla 3</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, repellendus voluptatibus eius qui velit impedit dignissimos?<br/>Misa: Catedral <br/> Hora: 3:00pm <br/> etc.</p>
              </div>
            </div>
          </div>
        </div>--><!-- / .row -->

      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->

@stop