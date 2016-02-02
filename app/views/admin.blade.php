@extends('base')

@section('Contenido')

<!-- Wrapper -->
    <div class="wrapper">
      <div class="container">   
      <h3>Obituario</h3>		
      {{$mensaje}}
      <hr>
      	<ul class="nav nav-tabs">
			<li class="active"><a href="#c1" data-toggle="tab">Capilla 1</a></li>
			<li><a href="#c2" data-toggle="tab">Capilla 2</a></li>
			<li><a href="#c3" data-toggle="tab">Capilla 3</a></li>
			<li><a href="#c4" data-toggle="tab">Capilla 4</a></li>
			<li><a href="#c5" data-toggle="tab">Capilla 5</a></li>
		</ul>
		<div class="tab-content">
		<!-- For que crea los 5 formularios de las capillas  -->
		 @foreach($ObituarioArray as $Obituario)
		 	<!-- If para dejar el primer panel como activo -->
			@if($Obituario->capilla=='1')
			<div class="tab-pane active" id="c{{$Obituario->capilla}}">			
			@else
			<div class="tab-pane" id="c{{$Obituario->capilla}}">			
			@endif
				{{Form::open(array('action' => array('ObituarioController@update', $Obituario->id), 'method'=> 'put'))}}
				<!--{{Form::open(array('url'=>'/admin/'.$Obituario->capilla, 'method' => 'post'))}}-->
					<div class="row">
						<div class="form-group col-md-12">
							{{Form::Label('estatus', 'Activa?  ')}}&nbsp;&nbsp;&nbsp;
							@if ($Obituario->estatus =='1')
								{{Form::radio('estatus', 1, true);}}Si&nbsp;&nbsp;&nbsp;
								{{Form::radio('estatus', 0, false);}}No
							@else
								{{Form::radio('estatus', 1, false);}}Si&nbsp;&nbsp;&nbsp;	
								{{Form::radio('estatus', 0, true);}}No
							@endif
						</div>
					</div>
					<h3>Datos Generales</h3>
					<div class="row">
						<div class="form-group col-md-12">
							{{Form::Label('nombre', 'Nombre')}}
							{{Form::text('nombre',$Obituario->nombre, array('class'=>'form-control'))}}
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							{{Form::Label('fallecimiento', 'Fallecimiento')}}
							{{Form::text('fallecimiento',$Obituario->fallecimiento, array('class'=>'form-control'))}}
						</div>
						<div class="form-group col-md-4">
							{{Form::Label('fechafuneral', 'Fecha del Funeral')}}
							{{Form::text('fechafuneral', $Obituario->fechafuneral, array('class'=>'form-control'))}}
						</div>
						<div class="form-group col-md-4">
							{{Form::Label('cementerio', 'Cementerio')}}
							{{Form::text('cementerio', $Obituario->cementerio, array('class'=>'form-control'))}}
						</div>
					</div>
					<h3>Servicios Religiosos</h3>
					<div class="row">
						<div class="form-group col-md-4">
							{{Form::Label('iglesia', 'Iglesia/Templo')}}
							{{Form::text('iglesia', $Obituario->iglesia, array('class'=>'form-control'))}}
						</div>
						<div class="form-group col-md-8">
							{{Form::Label('domicilioiglesia', 'Domicilio de la Iglesia/Templo')}}
							{{Form::text('domicilioiglesia', $Obituario->domicilioiglesia, array('class'=>'form-control'))}}
						</div>				
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							{{Form::Label('salidadeservicio', 'Salida de Servicio (Fecha y Hora)')}}
							{{Form::text('salidadeservicio', $Obituario->salidadeservicio, array('class'=>'form-control'))}}
						</div>
						<div class="form-group col-md-4">
							{{Form::Label('horaservicio', 'Hora de Servicio Religioso')}}
							{{Form::text('horaservicio', $Obituario->horaservicio, array('class'=>'form-control'))}}
						</div>
						<div class="form-group col-md-4">
							{{Form::Label('diaservicio', 'Dia de Servicio Religioso')}}
							{{Form::text('diaservicio', $Obituario->diaservicio, array('class'=>'form-control'))}}
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							{{Form::Label('iglesia2', 'Iglesia/Templo 2')}}
							{{Form::text('iglesia2', $Obituario->iglesia2, array('class'=>'form-control'))}}
						</div>
						<div class="form-group col-md-8">
							{{Form::Label('domicilioiglesia2', 'Domicilio de la Iglesia/Templo 2')}}
							{{Form::text('domicilioiglesia2', $Obituario->domicilioiglesia2, array('class'=>'form-control'))}}
						</div>			
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							{{Form::Label('salidadeservicio2', 'Salida de Servicio (Fecha y Hora) 2')}}
							{{Form::text('salidadeservicio2', $Obituario->salidadeservicio2, array('class'=>'form-control'))}}
						</div>
						<div class="form-group col-md-4">
							{{Form::Label('horaservicio2', 'Hora de Servicio Religioso 2')}}
							{{Form::text('horaservicio2', $Obituario->horaservicio2, array('class'=>'form-control'))}}
						</div>
						<div class="form-group col-md-4">
							{{Form::Label('diaservicio2', 'Dia de Servicio Religioso 2')}}
							{{Form::text('diaservicio2', $Obituario->diaservicio2, array('class'=>'form-control'))}}
						</div>	
					</div>
					<h3>Cremacion</h3>
					<div class="row">
						<div class="form-group col-md-4">
							{{Form::Label('cremacion', 'Cremación')}}
							{{Form::text('cremacion', $Obituario->cremacion, array('class'=>'form-control'))}}
						</div>
						<div class="form-group col-md-8">
							{{Form::Label('horacremacion', 'Fecha/Hora de Cremación')}}
							{{Form::text('horacremacion', $Obituario->horacremacion, array('class'=>'form-control'))}}
						</div>				
					</div>	
					<h3>Observaciones</h3>
					<div class="row">
						<div class="form-group col-md-12">
							{{Form::Label('observaciones', 'Notas Adicionales')}}
							{{Form::text('observaciones', $Obituario->observaciones, array('class'=>'form-control'))}}
						</div>
					</div>
					 {{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-primary')) }} 
				{{Form::close()}}
			</div>		
		   @endforeach 
		   </div> 
      	</div>
    </div>

@stop