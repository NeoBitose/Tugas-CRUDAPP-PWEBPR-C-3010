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
    $data = PortofolioModel::create($_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"]);
    header("Location:".$url."/views/user/portofolio.php");
  }

  public function detail($id){
    $data = PortofolioModel::detail($id);
    return $data;
  }

  public function update(){
    global $url;
    $data = PortofolioModel::update($_POST["id"],$_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"]);
    header("Location:".$url."/views/user/portofolio.php");
  }

  public function delete(){
    global $url;
    $data = PortofolioModel::delete($_GET["id"]);
    header("Location:".$url."/views/user/portofolio.php");
  }
}