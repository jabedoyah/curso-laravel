<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/prueba', function()
{
	return View::make('Ejemplo');
});


Route::get('/profile', array('before' => 'auth', function()
{
	return View::make('perfil.perfil')
                ->with("nombre", Auth::user()->nombre);

}));

Route::get('/', function()
{
        if(Auth::check()){
            return Redirect::to("/profile");
        }
	return View::make('general.login');
});

Route::get('/calendario', function()
{
	return View::make('calendario');
});

Route::post('/login', function()
{
	$email = Input::get('correo');
        $password = Input::get('password');
        if (Auth::attempt(array('correo' => $email, 'password' => $password)))
        {
            return Redirect::to("/profile");
        }else{
            echo "No está logueado";
        }
});

Route::get('/logout', function()
{
	Auth::logout();
        return Redirect::to("/");
});


Route::controller('Personal','PersonalController');
Route::controller('ejemplo','EjemploController');
Route::controller('clase','Clase2Controller');