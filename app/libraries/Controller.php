<?php
class Controller {
    //load model
    public function model($model){
        require_once '../app/models/' . $model . '.php';
        //instantiate new model
        return new $model();
    }
    
    //load view
    public function view($view, $data=[]){
        //check if view exists
        if(file_exists('../app/views/'. $view . '.php')){
            //require it
            require_once '../app/views/'. $view . '.php';
        }else{
            die('File not found');
        }
    }
}