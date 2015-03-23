<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/prueba', function()
{
	return View::make('prueba');
});

Route::get('/test', function()
{
	return View::make('registro.enfermera');
});

Route::controller('Personal','PersonalController');
Route::controller('ejemplo','EjemploController');
Route::controller('clase','Clase2Controller');