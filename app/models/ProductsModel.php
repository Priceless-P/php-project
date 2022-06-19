<?php

class ProductsModel {
    private $db;
    public function __construct(){
        $this-> db = new Database;
    }
    
    public function getAllProducts(){
        $this->db->query("SELECT * FROM Products");
        return $this->db->getAll();
    }
    
    public function deleteProduct($Deletable){
     try{
          $this->db->query("DELETE FROM Products WHERE SKU = :Deletable");
      // Bind values
      $this->db->bind(":Deletable", $Deletable);
      // Execute
     if($this->db->execute()){
         echo "done";
         return true;
     }else{
         return false;
     }
     }catch(PDOException $e){
                $error = $e->getMessage();
                echo $error; 
     }
    }
    
    public function update($data){
        $this->db->query("UPDATE Products SET SKU = :SKU, Name = :Name, Price = :Price, Type = :Type, Size = :Size, Weight = :Weight, Length = :Length, Width = :Width, Height = :Height WHERE id = :id");
        $this->db->bind(':id', $data['id']);
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
    
    public function getPostById($id){
        $query ="SELECT * FROM Products WHERE id = :id";
      $this->db->query($query);
      $this->db->bind(':id', intval($id));

      return $row = $this->db->single();

    }
}
