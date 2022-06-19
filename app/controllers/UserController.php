<?php
class UserController extends Controller {
   // private $usermodel;
    public function __construct(){
     $this->usermodel = $this->model('UserModel');
    }
    public function index(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $datas=[
                'username'=>trim($_POST['username']),
                'password'=>trim($_POST['password'])
                ];
                
                $validation_rules =[
                    'username'=>'required'
                    ];
        $datas['password']=password_hash($datas['password'], PASSWORD_DEFAULT);
           $valid = new Validator($datas, $validation_rules);
          $valid->validate();
          if($valid->passes()){
                if($this->usermodel->registerUser($datas)){
                    redirect ('user/dashboard');
                    echo "success";
                }else{
                    echo "failed";
                }
                
            }
            $this->view('user/register', $datas);
        }else{
           $datas = [
          'username'=> '',
          'password'=> '',
        ];
        
        $this->view('user/register', $datas);
    }
        }
}