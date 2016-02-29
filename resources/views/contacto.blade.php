@extends('templates.master')
@section('title')
Contacto
@stop
@section('contenido')





<div class="container main-container">				
	<h3 class="main-heading-1">Contáctenos</h3>


	<div class="row">





	</div>

	<div class="col-sm-6 col-xs-12">
		<div class="map"></div>
	</div>

	<div class="col-sm-6 col-xs-12">

		<div>

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Hogar</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Empresa</a></li>		
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<div class="status alert alert-success contact-status"></div>
					

					
					{!! Form::open(array('class'=>'contact-form','method' => 'post', 'url' => 'contactopersona')) !!}


					<div class="row">
					<br>

						<div class="col-md-6">
							<div class="form-group">
								<label for="name" class="sr-only">Nombre: </label>
								<input type="text" class="form-control" name="nombre" id="name" required="required" placeholder="NOMBRE">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email: </label>
								<input type="text" class="form-control" name="email" id="email" required="required" placeholder="EMAIL">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="phoneno" class="sr-only">Teléfono: </label>
								<input type="text" class="form-control" name="telefono" id="phoneno" required="required" placeholder="TELÉFONO">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="subject" class="sr-only">Asunto: </label>
								<input type="text" class="form-control" name="asunto" id="asunto" required="required" placeholder="ASUNTO">
							</div>
						</div>

						<div class="col-xs-12">
							<div class="form-group">
								<label for="message" class="sr-only">Mensaje: </label>
								<textarea class="form-control" rows="8" name="mensaje" id="message" required="required" placeholder="MENSAJE"></textarea>
							</div>
						</div>

						<div class="col-xs-12">
							
							{!! Form::submit('Enviar Datos',array('class' => 'btn btn-lg btn-block btn-secondary text-uppercase')) !!}	
						</div>
						<div class="form-group">
							{!! Form::close() !!}
						</div>
						
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane" id="profile">
				<div class="status alert alert-success contact-status"></div>
				{!! Form::open(array('class'=>'contact-form','method' => 'post', 'url' => 'contactoempresa')) !!}
					<div class="row"><br>

					<div class="col-md-6">
							<div class="form-group">
								<label for="name" class="sr-only">Nombre de la Empresa: </label>
								<input type="text" class="form-control" name="empresa" id="name" required="required" placeholder="NOMBRE DE LA EMPRESA">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="name" class="sr-only">NIT: </label>
								<input type="text" class="form-control" name="nit" id="name" required="required" placeholder="NIT">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email: </label>
								<input type="text" class="form-control" name="email" id="email" required="required" placeholder="EMAIL">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="phoneno" class="sr-only">Teléfono: </label>
								<input type="text" class="form-control" name="telefono" id="phoneno" required="required" placeholder="TELÉFONO">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="subject" class="sr-only">Asunto: </label>
								<input type="text" class="form-control" name="asunto" id="asunto" required="required" placeholder="ASUNTO">
							</div>
						</div>

						<div class="col-xs-12">
							<div class="form-group">
								<label for="message" class="sr-only">Mensaje: </label>
								<textarea class="form-control" rows="5" name="mensaje" id="message" required="required" placeholder="MENSAJE"></textarea>
							</div>
						</div>

						<div class="col-xs-12">
							<input type="submit" class="btn btn-lg btn-block btn-primary" value="ENVIAR">
						</div>
					</div>
				</form>
			</div>

		</div>

	</div>


</div>

</div>

@stop