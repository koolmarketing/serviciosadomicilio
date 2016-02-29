@extends('templates.master')
@section('title')
Servicios
@stop
@section('contenido')
<div class="container main-container">

	<div class="row">
	
		<div class="col-sm-8 col-xs-12">
			
			<section class="content-block-1">
				<h3 class="main-heading-1">Nuestros Servicios</h3>
				
				<ul class="list-unstyled row features-list">
					
					<li class="col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa icon-wrench-1"></i>
							</div>
							<div class="col-xs-9">
								<h5>Soporte Profesional</h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.
								</p>
							</div>
						</div>
					</li>
			
					<li class="col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa icon-adult"></i>
							</div>
							<div class="col-xs-9">
								<h5>Procesos Administrativos</h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.
								</p>
							</div>
						</div>
					</li>
					
					<li class="col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa icon-wrench"></i>
							</div>
							<div class="col-xs-9">
								<h5>Mantenimiento</h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.
								</p>
							</div>
						</div>
					</li>
					
					<li class="col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-cogs"></i>
							</div>
							<div class="col-xs-9">
								<h5>Adecuación de automoviles</h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.
								</p>
							</div>
						</div>
					</li>
				
					<li class="col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa icon-desktop"></i>
							</div>
							<div class="col-xs-9">
								<h5>Reparación electrónica</h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.
								</p>
							</div>
						</div>
					</li>
				
					<li class="col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa  icon-lock-3"></i>
							</div>
							<div class="col-xs-9">
								<h5>Seguridad</h5>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.
								</p>
							</div>
						</div>
					</li>
				
				</ul>
		
			</section>


		</div>
	
		<div class="col-sm-4 col-xs-12">
			
			<div class="side-block-1">
				<h3 class="main-heading-1">Our Staff</h3>
				
				<div id="staff-carousel" class="carousel slide fader" data-ride="carousel">
					
					<div class="carousel-inner">
						
						<div class="item active">
							<p>
								<img src="images/cerrajeria.jpg" alt="Image" class="img-responsive">
							</p>
							<h5>Cerrajería</h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.
							</p>
							<a href="" class="btn btn-secondary btn-sm">Contratar</a>
						</div>
						
						<div class="item">
							<p>
								<img src="images/hombre-mantenimiento-1.jpg" alt="Image" class="img-responsive">
							</p>
							<h5>Electricistas</h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.
							</p>
							<a href="" class="btn btn-secondary btn-sm">Contratar</a>
						</div>
					
						<div class="item">
							<p>
								<img src="images/lavador-de-carros.jpg" alt="Image" class="img-responsive">
							</p>
							<h5>Lavado de vehículos</h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer.
							</p>
							<a href="" class="btn btn-secondary btn-sm">Contratar</a>
						</div>
					
					</div>
					<a class="left carousel-control" href="#staff-carousel" role="button" data-slide="prev">
						<span class="fa fa-angle-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#staff-carousel" role="button" data-slide="next">
						<span class="fa fa-angle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>		
				</div>	
			</div>
		</div>
	</div>
</div>
<p><br></p>

@stop