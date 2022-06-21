<?php
class Users_model
{
     private $table = 'tb_users';
     private $db;

     public function __construct()
     {
          $this->db = new Database;
     }

     public function getAllUsers()
     {
          $this->db->query("SELECT * FROM " . $this->table);

          return $this->db->resultSet();
     }

     public function tambahDataUsers($data)
     {
          $query = "INSERT INTO " . $this->table . " VALUES(:user_id, :user_email, :user_password, :user_nama, '', '', '', '', '', '', '')";

          $this->db->query($query);
          $this->db->bind("user_id", $data["user_id"]);
          $this->db->bind("user_email", $data["user_email"]);
          $this->db->bind("user_password", $data["user_password"]);
          $this->db->bind("user_nama", $data["user_nama"]);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function hapusDataUsers($id)
     {
          $query = "DELETE FROM " . $this->table . " WHERE user_id = :user_id";

          $this->db->query($query);
          $this->db->bind("user_id", $id);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function ubahDataUsers($data)
     {
          $query = "UPDATE " . $this->table . " SET user_email = :user_email, user_password = :user_password, user_nama = :user_nama, user_alamat = :user_alamat, user_hp = :user_hp, user_pos = :user_pos, user_role = :user_role, user_aktif = :user_aktif, created_at = :created_at, updated_at = :updated_at WHERE user_id = :user_id";

          $this->db->query($query);
          $this->db->bind("user_email", $data["user_email"]);
          $this->db->bind("user_password", $data["user_password"]);
          $this->db->bind("user_nama", $data["user_nama"]);
          $this->db->bind("user_alamat", $data["user_alamat"]);
          $this->db->bind("user_hp", $data["user_hp"]);
          $this->db->bind("user_pos", $data["user_pos"]);
          $this->db->bind("user_role", $data["user_role"]);
          $this->db->bind("user_aktif", $data["user_aktif"]);
          $this->db->bind("created_at", $data["created_at"]);
          $this->db->bind("updated_at", $data["updated_at"]);
          $this->db->bind("user_id", $data["user_id"]);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function cariDataUsers()
     {
          $keyword = $_POST['keyword'];
          $query = "SELECT * FROM " . $this->table . " WHERE user_id LIKE :keyword OR user_email LIKE :keyword OR user_nama LIKE :keyword";

          $this->db->query($query);
          $this->db->bind('keyword', "%$keyword%");

          return $this->db->resultSet();
     }
}
