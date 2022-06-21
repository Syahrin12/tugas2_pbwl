<?php
class Golongan_model
{
     private $table = 'tb_golongan';
     private $db;

     public function __construct()
     {
          $this->db = new Database;
     }

     public function getAllGolongan()
     {
          $this->db->query("SELECT * FROM " . $this->table);

          return $this->db->resultSet();
     }

     public function tambahDataGolongan($data)
     {
          $query = "INSERT INTO " . $this->table . " VALUES(:gol_id, :gol_kode, :gol_nama, :created_at, :updated_at)";

          $this->db->query($query);
          $this->db->bind("gol_id", $data["gol_id"]);
          $this->db->bind("gol_kode", $data["gol_kode"]);
          $this->db->bind("gol_nama", $data["gol_nama"]);
          $this->db->bind("created_at", $data["created_at"]);
          $this->db->bind("updated_at", $data["updated_at"]);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function hapusDataGolongan($id)
     {
          $query = "DELETE FROM " . $this->table . " WHERE gol_id = :gol_id";

          $this->db->query($query);
          $this->db->bind("gol_id", $id);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function ubahDataGolongan($data)
     {
          $query = "UPDATE " . $this->table . " SET gol_kode = :gol_kode, gol_nama = :gol_nama, created_at = :created_at, updated_at = :updated_at WHERE gol_id = :gol_id";

          $this->db->query($query);
          $this->db->bind("gol_kode", $data["gol_kode"]);
          $this->db->bind("gol_nama", $data["gol_nama"]);
          $this->db->bind("created_at", $data["created_at"]);
          $this->db->bind("updated_at", $data["updated_at"]);
          $this->db->bind("gol_id", $data["gol_id"]);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function cariDataGolongan()
     {
          $keyword = $_POST['keyword'];
          $query = "SELECT * FROM " . $this->table . " WHERE gol_kode LIKE :keyword OR gol_nama LIKE :keyword OR gol_id LIKE :keyword";

          $this->db->query($query);
          $this->db->bind('keyword', "%$keyword%");

          return $this->db->resultSet();
     }
}
