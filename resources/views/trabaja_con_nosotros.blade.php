@extends('templates.master')
@section('title')
Trabaja con Nosotros
@stop
@section('contenido')

<div class="container main-container">

	<h1 class="main-heading-1">Trabaja con Nosotros</h1>


	<div class="col-md-8">
		
		<p class="p-nosotros">
			{!! Form::open(array('method' => 'post', 'url' => 'postular', 'files' => true)) !!}
			
			<div class="form-group col-md-6">
				<label for="exampleInputEmail1"><i class="icon-user-2"></i> Nombre Completo</label>
				<input type="text" class="form-control" name="propietario" id="exampleInputEmail1" placeholder="Email" required="requerid">
			</div>
			<div class="form-group col-md-6">
				<label for="exampleInputEmail1"><i class="icon-mail"></i> Email</label>
				<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" required="requerid">
			</div>

			<div class="form-group col-md-6">
				<label for="exampleInputEmail1"><i class="icon-phone"></i> Teléfono Fijo</label>
				<input type="text" class="form-control" name="telefono_fijo" id="exampleInputEmail1" placeholder="Teléfono" required="requerid">
			</div>
			<div class="form-group col-md-6">
				<label for="exampleInputEmail1"><i class="icon-mobile-2"></i> Celular</label>
				<input type="text" class="form-control" name="celular" id="exampleInputEmail1" placeholder="Celular" required="requerid">
			</div>

			<div class="form-group col-md-6">
				<label for="exampleInputEmail1"><i class=" icon-help-1"></i> Profesión</label>
				<input type="text" class="form-control" name="celular" id="exampleInputEmail1" placeholder="Profesión" required="requerid">
			</div>

			<div class="form-group col-md-6">
				<label for="exampleInputEmail1"><i class="icon-attach-1"></i> Curriculo</label>
				<input type="file" class="form-control" name="celular" id="exampleInputEmail1" placeholder="Curriculo" required="requerid">
			</div>

			<div class="form-group col-md-12">
				<label for="exampleInputEmail1"><i class="icon-info-2"></i>Mensaje</label>
				<textarea name="observaciones" id="input" class="form-control" rows="2" required="required"></textarea>
			</div>

			<div class="form-group col-md-12">
				<div class="g-recaptcha" data-sitekey="6LcSihkTAAAAALfG4Cwz95YbzFcp3pIlUH6BGAoS"></div>				
			</div>

			<div class="form-group col-md-12">

				{!! Form::submit('Enviar Datos',array('class' => 'btn btn-primary btn-md')) !!}	
				
			</div>


			
			{!! Form::close() !!}




		</p>

		

	</div>
	<div class="col-md-4"><img src="{!! URL::to('img/trabaja.jpg') !!}" class="img-responsive img-thumbnail"></div> 

	

</div>

@stop