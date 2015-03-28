<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/prueba', function()
{
	return View::make('Ejemplo');
});


Route::get('/jabedoyah', function()
{
	return View::make('perfil.perfil')
                ->with("nombre", "Andres");

});

Route::get('/calendario', function()
{
	return View::make('calendario');
});


Route::controller('Personal','PersonalController');
Route::controller('ejemplo','EjemploController');
Route::controller('clase','Clase2Controller');