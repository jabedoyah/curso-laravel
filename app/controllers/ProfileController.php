<?php

class ProfileController extends BaseController{
    
    //Cargar mi perfil
    public function getIndex() {

        $amigos = Usuario::all();
        $s = "";
        foreach ($amigos as $amigo) {
            $s.=',"' . $amigo->nombre . '"';
        }

        $s=  trim($s,",");
    
 
    $publicaciones = Publicacion::where('usuario_id', Auth::user()->id)
                                    ->orderBy('id','desc')
                                    ->get();
    return View::make('perfil.perfil')
            ->with("nombre", Auth::user()->nombre)
            ->with("correo", Auth::user()->correo)
            ->with("publicaciones", $publicaciones)
            ->with("s" , $s)
            ->with("foto" , Auth::User()->id.".jpg");
        
    }
    
    public function getVer($id){
        if($id == Auth::user()->id){
            return Redirect::to("/profile");
        }
        $usuario = Usuario::find($id);
        
        if($usuario){
            $publicaciones = $usuario->misPublicaciones();
            return View::make('perfil.perfil')
            ->with("nombre", $usuario->nombre)
            ->with("publicacion", $publicaciones)
            ->with("foto" , $usuario->id.".jpg");
            
        }else{
            return Redirect::to("/profile");
        }
        
    }
    
    public function getLogout(){
        Auth::logout();
        return Redirect::to("/");
    }
    
    /*public function missingMethod($parameters = array()){  //lo pasamos al BaseController
        return Redirect::to("/profile");
    
    }*/
}
