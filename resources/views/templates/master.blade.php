<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Servicios a Domicilio - @yield('title')</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=BenchNine:400,300,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
	{!! HTML::style("font-awesome/css/font-awesome.min.css") !!}
	{!! HTML::style("js/plugins/camera/css/camera.css") !!}
	{!! HTML::style("js/plugins/datepicker/css/datepicker.css") !!}
	{!! HTML::style("js/plugins/magnific-popup/magnific-popup.css") !!}

	{!! HTML::style("css/style.css") !!}
	{!! HTML::style("fontello/css/fontello.css") !!}
	{!! HTML::style("css/responsive.css") !!}
	{!! HTML::style("css/maincamoranns.css") !!}
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->
		  <!-- Fav and touch icons -->
<!-- 		  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.html">
		  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.html">
		  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.html">
		  <link rel="apple-touch-icon-precomposed" href="images/fav-57.html">
		  <link rel="shortcut icon" href="images/fav.html"> -->
		</head>
		<body>
			
			<header class="main-header">
				
				<div class="top-bar hidden-xs header-blue">
					<div class="container ">
						<ul class="list-unstyled list-inline clearfix">
							<li class="pull-left">Bienvenido a servicioadomicilio.com.co</li>

							<li class="pull-right">
								<i class=" icon-whatsapp"></i> 310 5221789 - 310 2562047 
							</li>
							<li class="pull-right"> 
								<img src="img/tarjetas.png" height="20" >
							</li>
							<li class="pull-right">
								{!! HTML::image('img/NR.png','NR',array('class' => 'img-responsive','width'=>'150px' )) !!}
							</li>
						</ul>
					</div>
				</div>
				
				<nav id="nav" class="navbar navbar-default navbar-static-top" role="navigation">
					
					<div class="container">
						
						<div class="navbar-header">
							
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<a href="" class="navbar-brand">
								<img class="img-responsive" src="images/logo.png" alt="Logo">
							</a>
							
						</div>
						
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li>{!! link_to('/','Inicio') !!} </li>
								<li>{!! link_to('nosotros/','Nosotros') !!} </li>
								<li>{!! link_to('servicios/','Servicios') !!} </li>
								<li>{!! link_to('','Trabaja con Nosotros') !!} </li>
								<li>{!! link_to('contacto/','Contacto') !!} </li>
							</ul>
						</div>						
					</div>					
				</nav>				
			</header>

			@yield('contenido')

			<footer class="main-footer">
				
				<div class="footer-area">
					<div class="container">
						<div class="row">
							


							<ul class="list-unstyled footer-links-style-2" style="text-align: center;">
								<li>
									<i class="fa fa-mobile"></i>
									+57 304 677 8532, 370 8923
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<a href="mailto:info@demowebsite.info">info@serviciosadomicilio.com.co</a>
								</li>
							</ul>
							<ul class="list-unstyled list-inline footer-sm-links" style="text-align: center;">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>			
							</ul>
							
						</div>
					</div>
				</div>
				
				<div class="copyright">
					<div class="container text-center">
						&copy; serviciosadomicilio.com.co 2016</a>
					</div>
				</div>
				
			</footer>
			

			{!! HTML::script("js/jquery-1.11.3.min.js") !!}
			{!! HTML::script("js/bootstrap.min.js") !!}
			{!! HTML::script("js/plugins/camera/js/jquery.mobile.customized.min.js") !!}
			{!! HTML::script("js/plugins/camera/js/jquery.easing.1.3.js") !!}
			{!! HTML::script("js/plugins/camera/js/camera.min.js") !!}
			{!! HTML::script("js/plugins/datepicker/js/bootstrap-datepicker.js") !!}
			{!! HTML::script("js/plugins/shuffle/jquery.shuffle.modernizr.min.js") !!}
			{!! HTML::script("js/plugins/magnific-popup/jquery.magnific-popup.min.js") !!}
			{!! HTML::script("https://maps.googleapis.com/maps/api/js") !!}
			{!! HTML::script ("js/custom.js")!!}

		</body>
		</html>