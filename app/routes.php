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
   /* 
    $amigos = Usuario::all();
    $s = "";
    foreach ($amigos as $amigo){
        $s.=',"'.$amigo->nombre.'"';
    }
    
    $s=  trim($s,",");
    
 
    $publicaciones = Publicacion::orderBy('id','desc')->get();
    return View::make('perfil.perfil')
            ->with("nombre", Auth::user()->nombre)
            ->with("correo", Auth::user()->correo)
            ->with("publicaciones", $publicaciones)
            ->with("s" , $s);*/
    
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

/*Route::get('/logout', function()
{
	Auth::logout(); //Lo pasamos para ProfileController
        return Redirect::to("/");
});*/


Route::controller('Personal','PersonalController');
Route::controller('ejemplo','EjemploController');
Route::controller('clase','Clase2Controller');

Route::group(array('before' => 'auth'), function(){
Route::controller('publicacion','PublicacionController');
Route::controller('profile','ProfileController');

});