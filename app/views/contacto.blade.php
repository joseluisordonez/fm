@extends('base')

@section('Contenido')

<!-- Wrapper -->
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 contact-us-p">
            <h2 class="headline first-child text-color">
              <span class="border-color">Contáctanos</span>
            </h2>
            <p>Para Funerales Modelo nuestros clientes son lo mas importante, por ello le invitamos a ponerse en contacto con nosotros para ofrecerle información, o bien, para ayudarnos a mejorar con sus sugerencias.</p>
            <form role="form">
              <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea class="form-control" rows="3" id="message" placeholder="Mensaje"></textarea>
              </div>
              <button type="submit" class="btn btn-lg btn-color">Enviar</button>
            </form>
          </div>
          <div class="col-sm-4">
            <h2 class="headline first-child first-child-m text-color">
              <span class="border-color">Dirección</span>
            </h2>
            <p>
              Av. Aldama No. 662<br />
              Col. Centro<br />
              Cd. Cuauhtémoc, Chih. <br />
              Telefono: (625) 581-54-50<br />
              Fax: (625) 581-54-50<br />
              Email: <a href="#">contacto@funeralesmodelo.com</a>
            </p>
            <h2 class="headline text-color">
              <span class="border-color">Google Map</span>
            </h2>
            <div class="map">
              <iframe width="350" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=28.403599,-106.865908&amp;num=1&amp;ie=UTF8&amp;ll=28.403537,-106.865918&amp;spn=0.004393,0.008256&amp;t=m&amp;z=14&amp;iwloc=near&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q=28.403599,-106.865908&amp;num=1&amp;ie=UTF8&amp;ll=28.403537,-106.865918&amp;spn=0.004393,0.008256&amp;t=m&amp;z=14&amp;iwloc=near&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
            </small>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- / .wrapper -->

@stop