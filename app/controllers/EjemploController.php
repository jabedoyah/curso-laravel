<?php
class EjemploController extends BaseController{
    public function getEjemplo($tipo){
       if($tipo=="ejemplo"){
           return View::make('prueba');
        }

    }
}