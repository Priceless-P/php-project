<?php

class AddModel {
    private $db;
    public function __construct(){
        $this-> db = new Database;
    }
    
    public function findProductBySKU($sku){
        $this->db->query("SELECT * FROM Products WHERE SKU = :sku");
        $this->db->bind(':sku', $sku);
        $row = $this->db->getOne();
        
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function addNewProduct($data){
        $this->db->query("INSERT INTO Products (SKU, Name, Price, Type, Size, Weight, Length, Width, Height) VALUES (:SKU, :Name, :Price, :Type, :Size, :Weight, :Length, :Width, :Height)");
        $this->db->bind(':SKU', $data['SKU']);
        $this->db->bind(':Name', $data['Name']);
        $this->db->bind(':Price', $data['Price']);
        $this->db->bind(':Type', $data['Type']);
        $this->db->bind(':Size', $data['Size']);
        $this->db->bind(':Weight', $data['Weight']);
        $this->db->bind(':Length', $data['Length']);
        $this->db->bind(':Width', $data['Width']);
        $this->db->bind(':Height', $data['Height']);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}