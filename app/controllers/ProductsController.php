<?php
class ProductsController extends Controller{
    public function __construct(){
     $this->postmodel = $this->model('ProductsModel');
     //$this->editmodel = $this->model('Edit');
    }
    
    public function index(){
        $products = $this->postmodel->getAllProducts();
        $data = [
            'products'=> $products
            ];
        //load view
        $this->view('products/index', $data);
    }
    
    public function deleted(){
if($_SERVER["REQUEST_METHOD"] == "POST"){
      if (isset($_POST["Deleted"])) {
    $count= $_POST["checkboxes"];
    foreach($count as $Deletable){
    
       if($this->postmodel->deleteProduct($Deletable)){
           redirect('index');
       }else{
           "Not Deleted";
       }
       //$this->view('products/index');
    }
        //console.log( "Something went wrong");
  }
}
    }
    public function edit($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
             $product = $this->postmodel->getProductById($id);
        
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
        $data = [
          'id'=> $id,
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
              if($this->postmodel->update($data)){
                  redirect('index');
              }
          }
          $this->view('products/edit', $data);
          }
         else{
                // $prod_id = $_GET['id'];
           $product = $this->postmodel->getPostById($id);
           
           $data = [
            //   'product' => $product
          'id' => $id,
          'SKU' =>  $product->SKU,
          'Name' => $product->Name,
          'Price'=>  $product['Price'],
           'Type' =>   $product['Type'],
        //   'Size' =>  $product['Size'],
        //   'Weight'=> $product['Weight'],
        //   'Length' =>  $product['Length'],
        //   'Width' =>  $product['Width'],
        //   'Height'=> $product['Height']
        ];
           $this->view('products/edit', $data);
          } 
         
        
    }
    
}