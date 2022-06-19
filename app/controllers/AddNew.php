<?php
class AddNew extends Controller{
    public function __construct(){
     
    $this->addmodel = $this->model('AddModel');
    }
    
    public function index(){
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
        $data = [
          'SKU'=> trim($_POST['SKU']),
          'Name'=> trim($_POST['Name']),
          'Price'=> trim($_POST['Price']),
          'Type' =>  trim($_POST['Type']),
          'Size' =>  trim($_POST['size']),
          'Weight'=> trim($_POST['weight']),
          'Length' =>  trim($_POST['length']),
          'Width' =>  trim($_POST['width']),
          'Height'=> trim($_POST['height'])
        ];
        
         $validation_rules= [
          'SKU'=>'required',
          
           ];
           //validation
          $validator = new Validator($data, $validation_rules);
          $validator->validate();
          if($validator->passes()){
              if($this->addmodel->addNewProduct($data)){
                  redirect('index');
              }
          }
          

           
           $this->view('products/add', $data);
        }
        
       else{
           $data = [
          'SKU'=> '',
          'name'=> '',
          'price'=> '',
          'type' =>  '',
        ];
        $this->view('products/add', $data);
    }
    }
}