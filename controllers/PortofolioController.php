<?php
require_once "models/PortofolioModel.php";
require_once "function/function.php";

class PortofolioController{
  
  public function index(){
    $data = PortofolioModel::read();
    loadView('portofolio', $data);
  }

  public function formcreate(){
    loadView('createporto');
  }

  public function create(){
    global $url;
    if (empty($_POST["judul"])) {
      echo "<script>alert('Kolom judul tidak boleh kosong');window.location.href = '/porthub/portofoliocreate'</script>";
      exit(); 
    } 
    else if (empty($_POST["deskripsi"])) {
      echo "<script>alert('Kolom deskripsi tidak boleh kosong');window.location.href = '/porthub/portofoliocreate'</script>";
      exit();
    } 
    else if (empty($_POST["link"])) {
      echo "<script>alert('Kolom link tidak boleh kosong');window.location.href = '/porthub/portofoliocreate'</script>";
      exit();
    } 
    else if (empty($_POST["tanggal"])) {
      echo "<script>alert('Kolom tanggal tidak boleh kosong');window.location.href = '/porthub/portofoliocreate'</script>";
      exit();
    }

    if (!preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["judul"])) {
      echo("<script>alert('Kolom judul hanya input huruf dan angka saja');window.location.href = '/porthub/portofoliocreate'</script>");
      exit();
    }

    if (strlen($_POST["judul"]) < 5) {
      echo("<script>alert('Kolom judul minimal input 5 karakter');window.location.href = '/porthub/portofoliocreate'</script>");
      exit();
    }
    else if (strlen($_POST["judul"]) > 40) {
      echo("<script>alert('Kolom judul maksimal input 40 karakter');window.location.href = '/porthub/portofoliocreate'</script>");
      exit();
    }
    if ($_FILES['gambar']['name'] != '') {
      $extension = substr($_FILES['gambar']['name'],strlen($_FILES['gambar']['name'])-4,strlen($_FILES['gambar']['name']));
      $file = md5($_FILES['gambar']['name']).time().$extension;
      $result = move_uploaded_file($_FILES['gambar']['tmp_name'], 'views/asset/img/'.$file);
      if (!$result) {
        echo("<script>alert('Gagal upload gambar');window.location.href = '/porthub/portofoliocreate'</script>");
      exit();
      }
      $data = PortofolioModel::create($_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"],$file);
    } 
    else {
      $data = PortofolioModel::create($_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"],null);
    }
    // $data = PortofolioModel::create($_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"]);
    header("Location:".$url."/portofolio");
  }

  public function detail($id){
    $data = PortofolioModel::detail($id);
    return $data;
  }

  public function formupdate($id){
    $data = PortofolioModel::detail($id);
    loadView('updateporto', $data);
  }

  public function update($id){
    global $url;
    if (empty($_POST["judul"])) {
      echo "<script>alert('Kolom judul tidak boleh kosong');window.location.href = '/porthub/portofolioupdate/".$_POST["id"]."'</script>";
      exit(); 
    } 
    else if (empty($_POST["deskripsi"])) {
      echo "<script>alert('Kolom deskripsi tidak boleh kosong');window.location.href = '/porthub/portofolioupdate/".$_POST["id"]."'</script>";
      exit();
    } 
    else if (empty($_POST["link"])) {
      echo "<script>alert('Kolom link tidak boleh kosong');window.location.href = '/porthub/portofolioupdate/".$_POST["id"]."'</script>";
      exit();
    } 
    else if (empty($_POST["tanggal"])) {
      echo "<script>alert('Kolom tanggal tidak boleh kosong');window.location.href = '/porthub/portofolioupdate/".$_POST["id"]."'</script>";
      exit();
    }

    if (!preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["judul"])) {
      echo("<script>alert('Kolom judul hanya input huruf dan angka saja');window.location.href = '/porthub/portofolioupdate/".$_POST["id"]."'</script>");
      exit();
    }

    if (strlen($_POST["judul"]) < 5) {
      echo("<script>alert('Kolom judul minimal input 5 karakter');window.location.href = '/porthub/portofolioupdate/".$_POST["id"]."'</script>");
      exit();
    }
    else if (strlen($_POST["judul"]) > 40) {
      echo("<script>alert('Kolom judul maksimal input 40 karakter');window.location.href = '/porthub/portofolioupdate/".$_POST["id"]."'</script>");
      exit();
    }

    if ($_FILES['gambar']['name'] != '') {
      $extension = substr($_FILES['gambar']['name'],strlen($_FILES['gambar']['name'])-4,strlen($_FILES['gambar']['name']));
      $file = md5($_FILES['gambar']['name']).time().$extension;
      $data = PortofolioModel::detail($_POST["id"]);
      if ($data[0]['gambar_porto'] != null) {
        if (file_exists('views/asset/img/'.$data[0]['gambar_porto'])) {
          unlink('views/asset/img/'.$data[0]['gambar_porto']);
        } 
      }
      $result = move_uploaded_file($_FILES['gambar']['tmp_name'], 'views/asset/img/'.$file);
      if (!$result) {
        echo("<script>alert('Gagal upload gambar');window.location.href = '/porthub/portofolioupdate/".$_POST["id"]."'</script>");
      exit();
      }
      $data = PortofolioModel::update($_POST["id"],$_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"],$file);
    } 
    else {
      $data = PortofolioModel::update($_POST["id"],$_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"],null);
    }
    header("Location:".$url."/portofolio");
  }

  public function delete($id){
    global $url;
    $data = PortofolioModel::detail($id);
    if ($data[0]['gambar_porto'] != null) {
      if (file_exists('views/asset/img/'.$data[0]['gambar_porto'])) {
        $result = unlink('views/asset/img/'.$data[0]['gambar_porto']);
        if (!$result) {
          echo("<script>alert('Gagal hapus gambar');window.location.href = '/porthub/portofolio'</script>");
          exit();
        }
      } 
    }
    $data = PortofolioModel::delete($id);
    header("Location:".$url."/portofolio");
  }
}