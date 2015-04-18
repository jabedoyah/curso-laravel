<?php

class Publicacion extends Eloquent{
    protected $table = 'Publicacion';
    
    public function freshTimestamp(){
        return date('Y-md h:i:s');
    }
    
    

}
