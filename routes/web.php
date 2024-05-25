<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/servicios/{param?}', function ($param = null) {
    return view('.servicios', ['param' => $param]);
})->where('param', '[A-Za-z]+');

Route::get('/proyectos/{param?}', function ($param = null) {
    return view('proyectos', ['param' => $param]);
})->where('param', '[A-Za-z]+');

Route::get('/clientes/{param?}', function ($param = null) {
    return view('clientes', ['param' => $param]);
})->where('param', '[A-Za-z]+');

Route::get('/blog/{param?}', function ($param = null) {
    return view('blog', ['param' => $param]);
})->where('param', '[0-9]+');

Route::get('/contacto', function () {
    return view('contacto');
});
