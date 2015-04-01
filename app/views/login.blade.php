@extends('base')


@section('Contenido')

<!-- Wrapper -->
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="sign-form">
              <h3 class="first-child">Iniciar Sesion</h3>
              <hr>
              <form role="form">
                <label class="sr-only" for="user">Usuario</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input class="form-control" id="user" placeholder="Usuario">
                </div>
                <br>
                <label class="sr-only" for="exampleInputPassword1">Usuario</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Recordarme
                  </label>
                </div>
                <button type="submit" class="btn btn-color">Entrar</button>
                <hr>
              </form>

            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->

@stop