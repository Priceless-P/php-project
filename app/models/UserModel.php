<?php
class UserModel {
    private $db;
    public function __construct(){
        $this-> db = new Database;
    }
    
    public function registerUser($datas){
        $this->db->query("INSERT INTO Users (username, password) VALUES (:username, :password)");

        $this->db->bind(':username', $datas['username']);
        $this->db->bind(':password', $datas['password']);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}