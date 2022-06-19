<?php

class Validator {
    private $data;
    private $validation_rules;
    private $error;
    private $findProduct;
    
    private $messages=[
        'uniqueSKU' =>'SKU already in use',
        'required' =>'Input field required',
        // 'select' =>'Type must be selected'
        ];
    
    public function __construct($data, $validation_rules){
        $this->data = $data;
        $this->validation_rules=$validation_rules;
       // $this->findProduct = new AddModel;
    }
    
    public function validate(){
        foreach($this->validation_rules as $field => $rule){
            $fieldValue = $this->getFieldValue($field);
            $rule = ucfirst($rule);
            $method_to_call = "validate$rule";
            if(!$this->$method_to_call($fieldValue)){
                $this->addError($rule, $field);
            }
        }
    }
    
    public function getFieldValue($field){
        return $this->data[$field];
    }
    
     public function validateUniqueSKU ($value){
         return $this->findProduct->findProductBySKU($value);
     }
    
    private function validateRequired ($value){
        return !empty($value);
    }
    public function validateSelected ($value){
        return !empty($value);
    }
    
    public function addError($rules, $field){
       $rules =strtolower($rules) ;
       $message = $this->messages[$rules];
       $this->error[$field] = $message;
       Session::set('errors', $this->error);
    }
    
    public static function getErrForField($field){
        if(Session::exists('errors')){
            $errors=Session::get('errors');
            if(key_exists($field, $errors)){
                $error = $errors[$field];
                unset($_SESSION['errors'][$field]);
                return $error;
            }
        }
    }
    
    public function passes() {
        return empty($this->error);
    }
    
    
}
