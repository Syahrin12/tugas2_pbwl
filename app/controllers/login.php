<?php

class Login extends Controller
{
     public function index()
     {
          $data["judul"]       = "Login";
          $data["login"] = $this->model("Login_model")->getAllUsers();

          $this->view("templates/header", $data);
          $this->view("login/index", $data);
     }

     function run()
     {
          if ($this->model("Login_model")->login($_POST) > 0) {
               Flasher::setFlash('Berhasil', 'Login', 'success');
               header("Location: " . BASEURL . "/home");
               exit;
          } else {
               Flasher::setFlash('Gagal', 'Login', 'danger');
               header("Location: " . BASEURL . "/login");
               exit;
          }
     }

     function logout()
     {
          session_destroy();
          header('location: index');
          exit;
     }
}