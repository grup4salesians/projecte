<?php

class UrlController extends BaseController{
     
    public function index(){
        $marca = Marca::all();          
        return Response::json(array('marca'=> $marca));
    }
}

?>