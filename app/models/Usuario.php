<?php

class Usuario extends Eloquent{
    protected $table = 'usuario';
    
    
    public function misPublicaciones() {
        return Publicacion::where('usuario_id', $this->id)
                        ->orderBy('id', 'desc')
                        ->get();
    }
    
    public function misAmigos(){
        return Usuario::where('id','<>',$this->id)->get();
    }
}
