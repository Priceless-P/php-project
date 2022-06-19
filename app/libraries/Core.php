<?php
class Core {
    private $controller = 'ProductsController';
    private $method = 'Index';
    private $params = [];
    
    public function __construct(){
        //get url
        $url= $this-> getUrl();
        //get controller
        if(file_exists('../app/controllers/'. ucwords($url[0]). '.php')){
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }
        //require file
            require_once '../app/controllers/'. $this->controller. '.php';
            //instantiate controller class
            $this->controller = new $this->controller;
            
            //get method
            if(isset($url[1])){
                if(method_exists($this->controller, $url[1])){
                    $this->method = $url[1];
                    //unset method
                    unset($url[1]);
                }
            }
            
            //get params
            $this->params = $url ? array_values($url) :[];
            //call a callback with array of params
            call_user_func_array([$this->controller, $this->method], $this->params);
            
    }
    
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}