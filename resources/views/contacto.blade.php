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
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="http://sainathchillapuram.com/BS/mediplus/dental/html-fullwidth/sendemail.php" role="form">
						<div class="row">

							<div class="col-md-6">
								<div class="form-group">
									<label for="name" class="sr-only">Nombre: </label>
									<input type="text" class="form-control" name="name" id="name" required="required" placeholder="NOMBRE">
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
									<input type="text" class="form-control" name="phoneno" id="phoneno" required="required" placeholder="TELÉFONO">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="subject" class="sr-only">Asunto: </label>
									<input type="text" class="form-control" name="subject" id="asunto" required="required" placeholder="ASUNTO">
								</div>
							</div>

							<div class="col-xs-12">
								<div class="form-group">
									<label for="message" class="sr-only">Mensaje: </label>
									<textarea class="form-control" rows="8" name="message" id="message" required="required" placeholder="MENSAJE"></textarea>
								</div>
							</div>

							<div class="col-xs-12">
								<input type="submit" class="btn btn-lg btn-block btn-secondary text-uppercase" value="ENVIAR">
							</div>
						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div class="status alert alert-success contact-status"></div>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="http://sainathchillapuram.com/BS/mediplus/dental/html-fullwidth/sendemail.php" role="form">
						<div class="row">

							<div class="col-md-6">
								<div class="form-group">
									<label for="name" class="sr-only">NIT: </label>
									<input type="text" class="form-control" name="name" id="name" required="required" placeholder="NIT">
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
									<input type="text" class="form-control" name="phoneno" id="phoneno" required="required" placeholder="TELÉFONO">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="subject" class="sr-only">Asunto: </label>
									<input type="text" class="form-control" name="subject" id="asunto" required="required" placeholder="ASUNTO">
								</div>
							</div>

							<div class="col-xs-12">
								<div class="form-group">
									<label for="message" class="sr-only">Mensaje: </label>
									<textarea class="form-control" rows="8" name="message" id="message" required="required" placeholder="MENSAJE"></textarea>
								</div>
							</div>

							<div class="col-xs-12">
								<input type="submit" class="btn btn-lg btn-block btn-secondary text-uppercase" value="ENVIAR">
							</div>
						</div>
					</form>
				</div>

			</div>

		</div>


	</div>

</div>

@stop