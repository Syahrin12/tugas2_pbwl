<?php
class Users extends Controller
{
     public function index()
     {
          $data["judul"] = "Users";
          $data["users"] = $this->model("Users_model")->getAllUsers();

          $this->view("templates/header", $data);
          $this->view("users/index", $data);
          $this->view("templates/footer");
     }

     public function tambah()
     {
          if ($this->model("Users_model")->tambahDataUsers($_POST) > 0) {
               Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
               header("Location: " . BASEURL . "/users");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
               header("Location: " . BASEURL . "/users");
               exit;
          }
     }

     public function hapus($id)
     {
          if ($this->model("Users_model")->hapusDataUsers($id) > 0) {
               Flasher::setFlash('Berhasil', 'Dihapus', 'success');
               header("Location: " . BASEURL . "/users");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Dihapus', 'danger');
               header("Location: " . BASEURL . "/users");
               exit;
          }
     }

     public function ubah()
     {
          if ($this->model("Users_model")->ubahDataUsers($_POST) > 0) {
               Flasher::setFlash('Berhasil', 'Diubah', 'success');
               header("Location: " . BASEURL . "/users");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Diubah', 'danger');
               header("Location: " . BASEURL . "/users");
               exit;
          }
     }

     public function cari()
     {
          $data["judul"] = "Daftar Users";
          $data["users"] = $this->model("Users_model")->cariDataUsers();

          $this->view("templates/header", $data);
          $this->view("users/index", $data);
          $this->view("templates/footer");
     }
}
