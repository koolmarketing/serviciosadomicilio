<?php


Route::get('/', function () {
	return view('home');
});

Route::get('trabaja_con_nosotros', function () {
	return view('trabaja_con_nosotros');
});



Route::group(['prefix' => 'servicios','middleware' => 'web'], function()
{

	Route::get('/', function () {
		return view('servicios');
	});

	Route::get('/administracion', function () {
		return view('administracion');
	});

	Route::get('/arquitectura', function () {
		return view('arquitectura');
	});

	Route::get('/seguridad_mantenimiento', function () {
		return view('seguridad_mantenimiento');
	});

	Route::get('/servicios_generales', function () {
		return view('servicios_generales');
	});


});


Route::get('nosotros', function () {
	return view('nosotros');
});

Route::get('unete', function () {
	return view('unete');
});

Route::get('contacto', function () {
	return view('contacto');
});

Route::post('enviarpostulacion', ['uses' => 'Correos@store', 'as' => 'enviar_postulacion']);

Route::post('contactopersona', ['uses' => 'Correos@contactoPersona', 'as' => 'contaco_persona']);

Route::post('contactoempresa', ['uses' => 'Correos@contactoEmpresa', 'as' => 'contacto_empresa']);
