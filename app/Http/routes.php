<?php


Route::get('/', function () {
    return view('home');
});

Route::get('servicios', function () {
    return view('servicios');
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

