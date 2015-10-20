<?php
//Main controller
//The main controller will hold the view

class Controller {

    function __construct() {
        
        $this->view = new View();//Main conroller is calling the view
    }

    public function loadModel($name){
        $path = 'models/'.$name.'_model.php';
        
        If(file_exists($path)){
            require 'models/'.$name.'_model.php';
            
            $modelName = $name .'_model';
            $this->model = new $modelName();
        }
    }
    
}

