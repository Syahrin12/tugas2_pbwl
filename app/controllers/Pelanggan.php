<?php
class Pelanggan extends Controller
{
     public function index()
     {
          $data["judul"] = "Pelanggan";
          $data["pelanggan"] = $this->model("Pelanggan_model")->getAllPelanggan();

          $this->view("templates/header", $data);
          $this->view("pelanggan/index", $data);
          $this->view("templates/footer");
     }

     public function tambah()
     {
          if ($this->model("Pelanggan_model")->tambahDataPelanggan($_POST) > 0) {
               Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
               header("Location: " . BASEURL . "/pelanggan");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
               header("Location: " . BASEURL . "/pelanggan");
               exit;
          }
     }

     public function hapus($id)
     {
          if ($this->model("Pelanggan_model")->hapusDataPelanggan($id) > 0) {
               Flasher::setFlash('Berhasil', 'Dihapus', 'success');
               header("Location: " . BASEURL . "/pelanggan");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Dihapus', 'danger');
               header("Location: " . BASEURL . "/pelanggan");
               exit;
          }
     }

     public function ubah()
     {
          if ($this->model("Pelanggan_model")->ubahDataPelanggan($_POST) > 0) {
               Flasher::setFlash('Berhasil', 'Diubah', 'success');
               header("Location: " . BASEURL . "/pelanggan");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Diubah', 'danger');
               header("Location: " . BASEURL . "/pelanggan");
               exit;
          }
     }

     public function cari()
     {
          $data["judul"] = "Daftar Pelanggan";
          $data["pelanggan"] = $this->model("Pelanggan_model")->cariDataPelanggan();

          $this->view("templates/header", $data);
          $this->view("pelanggan/index", $data);
          $this->view("templates/footer");
     }
}
