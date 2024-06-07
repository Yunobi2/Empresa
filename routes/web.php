<?php

use Illuminate\Support\Facades\Route;

/**Route::get('/', function () {
    return view('home');
});

Route::get('/servicios/{param?}', function ($param = null) {
    return view('.servicios', ['param' => $param]);
})->where('param', '[A-Za-z]+');

Route::get('/clientes/{param?}', function ($param = null) {
    return view('clientes', ['param' => $param]);
})->where('param', '[A-Za-z]+');

Route::get('/contacto', function () {
    return view('contacto');
});*/

Route::view('/','home')->name('inicio');
Route::get('persona','App\Http\Controllers\PersonasController@index')->name('persona.index');
Route::get('persona/{nPerCodigo}','App\Http\Controllers\PersonasController@show')->name('persona.show');
Route::view('contacto','contacto')->name('contacto');
