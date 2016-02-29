@extends('templates.master')
@section('title')
Nosotros
@stop
@section('contenido')

<div class="container main-container">
				
				<h4 class="main-heading-1">Nosotros</h4>
						
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
				<p>
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupi.
				</p>
				
				<section class="profile-box">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<img src="images/personas.jpg" alt="Doctor Name" class="img-responsive">
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="content">
								<h4>serviciosadomicilio.com.co</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								</p>

							</div>
						</div>
					</div>
				</section>
				<!-- Profile Section Ends -->
			</div>

			<div class="container main-container">
				<!-- Nested Row Starts -->
				<div class="row">
					<!-- Why Us Starts -->
					<div class="col-md-9 col-sm-7 col-xs-12">
						<h4 class="main-heading-1">¿Por qué escogernos?</h4>
						<div class="row">
							<div class="col-sm-5 col-xs-12">
								<img src="images/hombre-mantenimiento-1.jpg" alt="image" class="img-responsive">
							</div>
							<div class="col-sm-7 col-xs-12">
								<ul class="list-unstyled list-style-1">
									<li>
										<i class="fa fa-check"></i>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</li>
									<li>
										<i class="fa fa-check"></i>
										Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</li>
									<li>
										<i class="fa fa-check"></i>
										Ut enim ad minim veniam, quis nostrud exercitation.
									</li>
									<li>
										<i class="fa fa-check"></i>
										Laboris nisi ut aliquip ex ea commodo consequat. 
									</li>
									<li>
										<i class="fa fa-check"></i>
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
									</li>
									<li>
										<i class="fa fa-check"></i>
										Dolore eu fugiat nulla pariatur.
									</li>
									<li>
										<i class="fa fa-check"></i>
										Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
									</li>
									<li>
										<i class="fa fa-check"></i>
										Duis aute irure dolor in reprehenderit in voluptate velit esse.
									</li>
								</ul>
							</div>
						</div>
						<br>

					</div>
				
					<div class="col-md-3 col-sm-5 col-xs-12">
						<h4 class="main-heading-1">Nuestro Equipo</h4>
						
						<div class="panel-group" id="accordion">
							
							<div class="panel">
								
								<div class="panel-heading">
									<h5 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
											Cerrajería
										</a>
									</h5>
								</div>
								
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="thumbnail">
											<img src="images/cerrajeria.jpg" alt="Doctor" class="img-responsive">

										</div>									
									</div>
								</div>								
							</div>							
							<div class="panel">
								
								<div class="panel-heading">
									<h5 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
											Técnicos en reparación
										</a>
									</h5>
								</div>							
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="thumbnail">
											<img src="images/hombre-reparacion.jpg" alt="Doctor" class="img-responsive">

										</div>	
									</div>
								</div>								
							</div>
							

							<div class="panel">
								
								<div class="panel-heading">
									<h5 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#mensajeria">
										Mensajería Local
										</a>
									</h5>
								</div>
							
								<div id="mensajeria" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="thumbnail">
											<img src="images/mensajeria.jpg" alt="Doctor" class="img-responsive">

										</div>	
									</div>
								</div>								
							</div>							
						</div>						
					</div>				
				</div>				
			</div>
	
		

@stop