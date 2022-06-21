<?php
class Login_model
{
     private $table = 'tb_users';
     private $db;

     public function __construct()
     {
          $this->db = new Database;
     }

     public function getAllUsers(){
          $this->db->query("SELECT * FROM " . $this->table);
          return $this->db->resultset();
     }
     public function login($data)
     {
          $query = "SELECT * FROM " . $this->table . " WHERE user_email = :user_email AND user_password =  :user_password";

          $this->db->query($query);
          $this->db->bind("user_email", $data["user_email"]);
          $this->db->bind("user_password", $data["user_password"]);

          $this->db->execute();

          return $this->db->resultSet();
     }
}