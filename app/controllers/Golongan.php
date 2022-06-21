<?php
class Golongan extends Controller
{
     public function index()
     {
          $data["judul"] = "Golongan";
          $data["golongan"] = $this->model("Golongan_model")->getAllGolongan();

          $this->view("templates/header", $data);
          $this->view("golongan/index", $data);
          $this->view("templates/footer");
     }

     public function tambah()
     {
          if ($this->model("Golongan_model")->tambahDataGolongan($_POST) > 0) {
               Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
               header("Location: " . BASEURL . "/golongan");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
               header("Location: " . BASEURL . "/golongan");
               exit;
          }
     }

     public function hapus($id)
     {
          if ($this->model("Golongan_model")->hapusDataGolongan($id) > 0) {
               Flasher::setFlash('Berhasil', 'Dihapus', 'success');
               header("Location: " . BASEURL . "/golongan");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Dihapus', 'danger');
               header("Location: " . BASEURL . "/golongan");
               exit;
          }
     }

     public function ubah()
     {
          if ($this->model("Golongan_model")->ubahDataGolongan($_POST) > 0) {
               Flasher::setFlash('Berhasil', 'Diubah', 'success');
               header("Location: " . BASEURL . "/golongan");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Diubah', 'danger');
               header("Location: " . BASEURL . "/golongan");
               exit;
          }
     }

     public function cari()
     {
          $data["judul"] = "Daftar Golongan";
          $data["golongan"] = $this->model("Golongan_model")->cariDataGolongan();

          $this->view("templates/header", $data);
          $this->view("golongan/index", $data);
          $this->view("templates/footer");
     }
}
