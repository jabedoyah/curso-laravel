<?php
class PersonalController extends BaseController{
    public function getRegistrar($tipo){
       if($tipo=="enfermera"){
           return View::make('registro.enfermera');
       }elseif($tipo=="medico"){
           return View::make('registro.medico');
       }elseif($tipo=="paciente"){
           return View::make('registro.paciente');
       }else{
           return "Error, no existe";
       }
        
    }
    
    
    public function getEditar(){
        echo "Estoy editando";
    }
}
