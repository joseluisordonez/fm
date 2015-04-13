@extends('base')


@section('Contenido')

<!-- Wrapper -->
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="sign-form">
              <h3 class="first-child">Iniciar Sesion</h3>
                {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                @if(Session::has('mensaje_error'))
                  <div class="info-board info-board-red">{{ Session::get('mensaje_error') }} </div>
                @endif
              <hr>
              {{ Form::open(array('url' => '/login')) }}
                {{ Form::label('usuario', 'Nombre de usuario') }}
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  {{ Form::text('username', Input::old('username'),array('class'=>'form-control') ); }}
                </div>
                <br>
                {{ Form::label('contraseña', 'Contraseña') }}
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  {{ Form::password('password',array('class'=>'form-control')); }}
                </div>
                <div class="checkbox">
                  {{ Form::label('lblRememberme', 'Recordar contraseña') }}
                  {{ Form::checkbox('rememberme', true) }}
                </div>
                {{ Form::submit('Entrar') }}
                <hr>
              {{ Form::close() }}

            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->

@stop