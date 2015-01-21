<?php

class UrlController extends BaseController{
     
    public function selectallmarca(){
        $marca = Marca::all();          
        return Response::json(array('Marca'=> $marca));
    }
    
     public function selectallusuaris(){
        $usuaris = Usuaris::all();          
        return Response::json(array('Usuaris'=> $usuaris));
    }
    
     public function selectallcorreu(){
        $correu = Correu::all();          
        return Response::json(array('Correu'=> $correu));
    }
    
     public function selectallvehicles(){
        $vehicles = Vehicles::all();          
        return Response::json(array('Vehicles'=> $vehicles));
    }
    
    public function selectallvehiclesusuaris(){
        $vehiclesusuaris = Vehiclesusuaris::all();          
        return Response::json(array('Vehicles_usuaris'=> $vehiclesusuaris));
    }
    
    public function selectallcaracteristiques(){
        $caracteristiques = Caracteristiques::all();          
        return Response::json(array('Caracteristiques'=> $caracteristiques));
    }
    public function selectallpassatger(){
        $Passatger = Passatger::all();          
        return Response::json(array('Passatger'=> $Passatger));
    }
    public function selectallruta(){
        $ruta = Passatger::all();          
        return Response::json(array('Ruta'=> $ruta));
    }
    public function selectallmodel(){
        $model = Model::all();          
        return Response::json(array('Model'=> $model));
    }
    
    public function selectallperiodicitat(){
        $Periodicitat = Periodicitat::all();          
        return Response::json(array('Periodicitat'=> $Periodicitat));
    }
    public function selectallviatge(){
        $Viatge = Periodicitat::all();          
        return Response::json(array('Viatge'=> $Viatge));
    }
    
    
}

?>