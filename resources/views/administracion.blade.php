@extends('templates.master')
@section('title')
Administración y Gestión Documental
@stop
@section('contenido')

<div class="container main-container">

	<h4 class="main-heading-1">Administración y Gestión Documental</h4>
	
	<div class="col-md-6"><img src="{!! URL::to('img/administracion.jpg') !!}" class="img-responsive img-thumbnail"></div> 

	<div class="col-md-6">
		
<p class="p-nosotros">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam animi, incidunt sit accusamus, quod tenetur officia magni perspiciatis. Alias hic, maiores totam perferendis temporibus perspiciatis nihil adipisci, quisquam ipsa ullam. ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo hic architecto, necessitatibus ducimus minima at suscipit laboriosam ratione incidunt excepturi deserunt illum facilis cum adipisci voluptatem perspiciatis dolore fuga.
</p>
<a href="{!! URL::to('contacto') !!}" class="btn-primary btn btn-md">Contactar</a>

	</div>

</div>

@stop