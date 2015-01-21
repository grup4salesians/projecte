<?php

class MarcaController extends BaseController{
     
    public function mostrarMarcas(){
        $marca = Marca::all();
       
        return View::make('marca.lista',array('marca'=> $marca));
        
        
    }
}

?>
