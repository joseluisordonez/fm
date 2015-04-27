@extends('base')

@section('Contenido')

<!-- Wrapper -->
    <div class="wrapper">
      <div class="container">   		
		{{Form::open(array('url' => '/admin'))}}
			<h3>Obituario</h3>
			<div class="row">
				<div class="form-group col-md-12">
					{{Form::Label('nombre', 'Nombre')}}
					{{Form::text('nombre', Input::old('nombre'), array('class'=>'form-control'))}}
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					{{Form::Label('salidadeservicio', 'Salida de Servicio (Fecha y Hora)')}}
					{{Form::text('salidadeservicio', Input::old('salidadeservicio'), array('class'=>'form-control'))}}
				</div>
				<div class="form-group col-md-4">
					{{Form::Label('horaservicio', 'Hora de Servicio Religioso')}}
					{{Form::text('horaservicio', Input::old('horaservicio'), array('class'=>'form-control'))}}
				</div>
				<div class="form-group col-md-4">
					{{Form::Label('fechafuneral', 'Fecha del Funeral')}}
					{{Form::text('fechafuneral', Input::old('fechafuneral'), array('class'=>'form-control'))}}
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					{{Form::Label('iglesia', 'Iglesia/Templo')}}
					{{Form::text('iglesia', Input::old('iglesia'), array('class'=>'form-control'))}}
				</div>
				<div class="form-group col-md-8">
					{{Form::Label('domicilioiglesia', 'Domicilio de la Iglesia/Templo')}}
					{{Form::text('domicilioiglesia', Input::old('domicilioiglesia'), array('class'=>'form-control'))}}
				</div>				
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					{{Form::Label('panteon', 'Panteon')}}
					{{Form::text('panteon', Input::old('panteon'), array('class'=>'form-control'))}}
				
				</div>
			</div>	
			<div class="row">
				<div class="form-group col-md-12">
					{{Form::Label('observaciones', 'Observaciones')}}
					{{Form::text('observaciones', Input::old('observaciones'), array('class'=>'form-control'))}}
				</div>
			</div>
			 {{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-primary')) }} 


		{{Form::close()}}       
      </div>
    </div>

@stop