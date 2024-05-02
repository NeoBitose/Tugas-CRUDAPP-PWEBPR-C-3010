<?php
require "../../app/models/PortofolioModel.php";

if(isset($_GET['action']) and $_GET['action'] == 'create') {
  PortofolioController::create();
}
else if(isset($_GET['action']) and $_GET['action'] == 'update') {
  PortofolioController::update();
}
else if(isset($_GET['action']) and $_GET['action'] == 'delete') {
  PortofolioController::delete();
} 

class PortofolioController{

  static function index(){
    $data = PortofolioModel::read();
    return $data;
  }

  public static function create(){
    global $url;
    $data = PortofolioModel::create($_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"]);
    header("Location:".$url."/views/user/portofolio.php");
  }

  public static function detail($id){
    $data = PortofolioModel::detail($id);
    return $data;
  }

  public static function update(){
    global $url;
    $data = PortofolioModel::update($_POST["id"],$_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"]);
    header("Location:".$url."/views/user/portofolio.php");
  }

  public static function delete(){
    global $url;
    $data = PortofolioModel::delete($_GET["id"]);
    header("Location:".$url."/views/user/portofolio.php");
  }
}