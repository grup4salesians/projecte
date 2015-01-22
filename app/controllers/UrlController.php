<?php

class UrlController extends BaseController{
     
    public function selectallmarca(){
        $marca = Marca::all();          
        return Response::json(array('Error'=>MirarError($marca),'Marca'=> $marca),200);
    }
    public function selectallusuaris(){
        $usuaris = Usuaris::all();          
        return Response::json(array('Error'=>MirarError($marca),'Usuaris'=> $usuaris),200);
    }
    public function selectallcorreu(){
        $correu = Correu::all();          
        return Response::json(array('Error'=>MirarError($marca),'Correu'=> $correu),200);
    }
    public function selectallvehicles(){
        $vehicles = Vehicles::all();          
        return Response::json(array('Error'=>MirarError($marca),'Vehicles'=> $vehicles),200);
    }
    public function selectallvehiclesusuaris(){
        $vehiclesusuaris = Vehiclesusuaris::all();          
        return Response::json(array('Error'=>MirarError($marca),'Vehicles_usuaris'=> $vehiclesusuaris),200);
    }
    public function selectallcaracteristiques(){
        $caracteristiques = Caracteristiques::all();          
        return Response::json(array('Error'=>MirarError($marca),'Caracteristiques'=> $caracteristiques),200);
    }
    public function selectallpassatger(){
        $Passatger = Passatger::all();          
        return Response::json(array('Error'=>MirarError($marca),'Passatger'=> $Passatger),200);
    }
    public function selectallruta(){
        $ruta = Ruta::all();          
        return Response::json(array('Error'=>false,'Ruta'=> $ruta),200);
    }
    public function selectallmodel(){
        $model = Model::all();          
        return Response::json(array('Error'=>MirarError($marca),'Model'=> $model),200);
    }
    public function selectallperiodicitat(){
        $Periodicitat = Periodicitat::all();          
        return Response::json(array('Error'=>MirarError($marca),'Periodicitat'=> $Periodicitat),200);
    }
    public function selectallviatge(){
        $Viatge = Periodicitat::all();          
        return Response::json(array('Error'=>MirarError($marca),'Viatge'=> $Viatge),200);
    }
    
    /********* SELECTS CON WHERE ID *************/
    
    public function selectusuarisid($id){
        $usuaris = Usuaris::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($usuaris),'Usuaris'=> $usuaris),200);
    }
    public function selectmarcaid($id){
        $marca = Marca::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($marca),'Marca'=> $marca),200);
    }
    public function selectcorreuid($id){
        $correu = Correu::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($correu),'Correu'=> $correu),200);
    }
    public function selectvehiclesid($id){
        $vehicles = Vehicles::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($vehicles),'Vehicles'=> $vehicles),200);
    }
    public function selectvehiclesusuarisid($id){
        $vehiclesusuaris = Vehiclesusuaris::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($vehiclesusuaris),'Vehicles_usuaris'=> $vehiclesusuaris),200);
    }
    public function selectcaracteristiquesid($id){
        $caracteristiques = Caracteristiques::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($caracteristiques),'Caracteristiques'=> $caracteristiques),200);
    }
    public function selectpassatgerid($id){
        $Passatger = Passatger::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($Passatger),'Passatger'=> $Passatger),200);
    }
    public function selectrutaid($id){
        $ruta = Ruta::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($ruta),'Ruta'=> $ruta),200);
    }
    public function selectmodelid($id){
        $model = Model::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($model),'Model'=> $model),200);
    }
    public function selectperiodicitatid($id){
        $Periodicitat = Periodicitat::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($Periodicitat),'Periodicitat'=> $Periodicitat),200);
    }
    public function selectviatgeid($id){
        $Viatge = Viatge::where('id',$id)->get(); 
        return Response::json(array('Error'=>MirarError($Viatge),'Viatge'=> $Viatge),200);
    }
}

?>

<?php
function MirarError($valor){
        if (count($valor)){$error = 0;}
        else{ $error = 1; }
        return $error;
}
?>