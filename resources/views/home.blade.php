@extends('templates.master')
@section('title')
Inicio
@stop
@section('contenido')




<section class="slider clearfix">
	<div id="camera_wrap_1" class="camera_wrap">
		<!-- Slide #1 Starts -->
		<div data-src="images/slider/slider-img1.jpg">
			<div class="camera_caption fadeFromLeft hidden-xs">
				<h2><b>¿Tiene una emergencia?</b></h2>
				<h1 class="text-black">Llámenos!</h1>
			</div>
		</div>
		<!-- Slide #1 Ends -->
		<!-- Slide #2 Starts -->
		<div data-src="images/slider/slider-img2.jpg">
			<div class="camera_caption fadeFromRight hidden-xs">
				<h2><b>Técnicos y profesionales especializados</b></h2>
				<h2 class="text-black">En distintas aréas del servicio.</h2>
			</div>
		</div>
		<!-- Slide #2 Ends -->

		<!-- Slide #2 Starts -->
		<div data-src="images/slider/slider-img3.jpg">
			<div class="camera_caption fadeFromRight hidden-xs">
				<h2><b>Personas expertas</b></h2>
				<h2 class="text-black">Siempre disponibles</h2>
			</div>
		</div>
		<!-- Slide #2 Ends -->


	</div>
</section>
<!-- Slider Section Ends -->
<!-- Notification Section Starts -->
<section class="notification-area">
	<!-- Nested Container Starts -->
	<div class="container">
		<div class="row">
			<!-- Block #1 Starts -->
			<div class="col-sm-3 col-xs-12 block">
				<h2><i class="fa icon-adult"></i></h2>
				<span class="box-title"><h4>Servicios administrativos y gestión documental</h4></span>
				
				<a href="#" class="btn btn-lite">Ver más</a>
			</div>
			<!-- Block #1 Ends -->
			<!-- Block #2 Starts -->
			<div class="col-sm-3 col-xs-12 block ">
				<h2><i class="fa icon-wrench-1"></i></h2>
				<span class="box-title"><h4>Servicios Arquitectura</h4></span>
				<a href="#" class="btn btn-lite">Ver más</a>
				
				
			</div>
			<!-- Block #2 Ends -->
			<!-- Block #3 Starts -->
			<div class="col-sm-3 col-xs-12 block">
				<h2><i class="fa  icon-videocam-outline"></i></h2>
				<span class="box-title"><h4>Servicios de Seguridad y mantenimiento</h4>	</span>			
				<a href="#" class="btn btn-lite">Ver más</a>
			</div>
			<!-- Block #3 Ends -->
			<!-- Block #2 Starts -->
			<div class="col-sm-3 col-xs-12 block ">
				<h2><i class="fa icon-wrench"></i></h2>
				<span class="box-title"><h4>Servicios Generales</h4></span>
				<a href="#" class="btn btn-lite">Ver más</a>
				
			</div>
			<!-- Block #2 Ends -->
		</div>
	</div>
	<!-- Nested Container Ends -->
</section>
<!-- Notification Section Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
	<!-- Welcome Section Starts -->
	<section class="welcome">
		<h1 class="text-uppercase text-center">Bienvenido a nuestro portafolio de servicios para su empresa u hogar.</h1>
<!-- 		<p class="lead text-center">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard dummy text.
		</p> -->
		<div class="row">
			<!-- Intro Block Starts -->
			<div class="col-sm-4 col-xs-12 intro-block text-center-xs">
				
				<h4>NUESTROS VALORES</h4>

				<img src="img/nuestrosvalores.jpg" alt="" class="img-responsive img-thumbnail">
				<br><br>

				<p class="text-valores"><i class="icon-check"></i> CALIDAD HUMANA</p>
				<p class="text-valores"><i class="icon-check"></i> RESPALDO Y CONFIANZA</p>
				<p class="text-valores"><i class="icon-check"></i> SERVICIO Y AMOR </p>

				<a href="{!! URL::to('nosotros') !!}" class="btn btn-lg btn-secondary text-uppercase">Nosotros</a>
			</div>
			<!-- Intro Block Ends -->
			<!-- Features Block Starts -->
			<div class="col-sm-8 col-xs-12">
				<!-- Features List Starts -->
				<ul class="list-unstyled row features-list">
					<!-- List #1 Starts -->
					<li class="col-sm-6 col-xs-12 item-service">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa icon-adult"></i>
							</div>
							<div class="col-xs-9">
								<h5>Servicios administrativos y gestión documental</h5>				
								<p>Tramites de vehiculos ante el Transito</p>
								<p>mensajería local</p>
								<p>Publicidad</p>
								<p>Contabilidad</p>
								<a href="" class="btn btn-secondary btn-sm">ver más</a>
							</div>
						</div>

						<!-- <img src="{!! URL::to('img/serviciosdearquitectura.jpg') !!}" alt="" class="img-responsive img-thumbnail"> -->
					</li>
					<!-- List #1 Ends -->
					<!-- List #2 Starts -->
					<li class="col-sm-6 col-xs-12 item-service">
						<div class="row">
							<div class="col-xs-3">
								
								<i class="fa icon-wrench-1"></i>
							</div>
							<div class="col-xs-9">
								<h5>Servicios arquitectura</h5>
								<p>Aquitectos</p>
								<p>Construcción de obras y acabados</p>
								<p>Electricistas</p>
								<p>Fontaneros</p>
								<p>Albañiles</p>
								
								<a href="" class="btn btn-secondary btn-sm">ver más</a>
							</div>
						</div>
					</li>
					<!-- List #2 Ends -->
					<!-- List #3 Starts -->
					<li class="col-sm-6 col-xs-12 item-service">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa icon-wrench"></i>
							</div>
							<div class="col-xs-9">
								<h5>Servicios de Seguridad y mantenimiento</h5>
								<p>Mantenimiento de Aires acondicionado.</p>
								<p>Mantenimiento de Equipos de computo y Celulares.</p>
								<p>Mantenimiento Fotocopiadoras.</p>
								<P>Polarizado de vehículos</P>
								<a href="" class="btn btn-secondary btn-sm">ver más</a>
							</div>
						</div>
					</li>
					<!-- List #3 Ends -->
					<!-- List #4 Starts -->
					<li class="col-sm-6 col-xs-12 item-service">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa  icon-videocam-outline"></i>
								
							</div>
							<div class="col-xs-9">
								<h5>Servicios Generales</h5>
								<p>Cerrajería</p>
								<p>Alarmas de vehículos y rastreador</p>
								<p>Sistema de seguridad para vivienda u oficina</p>
								<p>Fumigación</p>
								<a href="" class="btn btn-secondary btn-sm">ver más</a>
							</div>
						</div>
					</li>
					<!-- List #4 Ends -->
				</ul>
				<!-- Features List Ends -->
			</div>
			<!-- Features Block Ends -->
		</div>

	</section>
	<!-- Welcome Section Ends -->
</div>
<!-- Main Container Ends -->
<!-- Footer Starts -->







@stop