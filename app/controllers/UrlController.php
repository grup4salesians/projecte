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
        $ruta = Ruta::all();          
        return Response::json(array('Error'=>false,'Ruta'=> $ruta),200);
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
    
    /*******/
     public function selectusuarisid($id){
        $usuaris = Usuaris::where('id',$id)->get(); 
        return Response::json(array('Usuaris'=> $usuaris));
    }
     public function selectmarcaid($id){
        $marca = Marca::where('id',$id)->get(); 
        return Response::json(array('Marca'=> $marca));
    }
    
//     public function selectallcorreuid(){
//        $correu = Correu::all();          
//        return Response::json(array('Correu'=> $correu));
//    }
//    
//     public function selectallvehiclesid(){
//        $vehicles = Vehicles::all();          
//        return Response::json(array('Vehicles'=> $vehicles));
//    }
//    
//    public function selectallvehiclesusuarisid(){
//        $vehiclesusuaris = Vehiclesusuaris::all();          
//        return Response::json(array('Vehicles_usuaris'=> $vehiclesusuaris));
//    }
//    
//    public function selectallcaracteristiquesid(){
//        $caracteristiques = Caracteristiques::all();          
//        return Response::json(array('Caracteristiques'=> $caracteristiques));
//    }
//    public function selectallpassatgerid(){
//        $Passatger = Passatger::all();          
//        return Response::json(array('Passatger'=> $Passatger));
//    }
//    public function selectallrutaid(){
//        $ruta = Ruta::all();          
//        return Response::json(array('Error'=>false,'Ruta'=> $ruta),200);
//    }
//    public function selectallmodelid(){
//        $model = Model::all();          
//        return Response::json(array('Model'=> $model));
//    }
//    
//    public function selectallperiodicitatid(){
//        $Periodicitat = Periodicitat::all();          
//        return Response::json(array('Periodicitat'=> $Periodicitat));
//    }
//    public function selectallviatgeid(){
//        $Viatge = Periodicitat::all();          
//        return Response::json(array('Viatge'=> $Viatge));
//    }
//    
    
}

?>