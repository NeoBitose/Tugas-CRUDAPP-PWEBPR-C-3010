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
    header("Location:".$url."/portofolio");
  }

  public function detail($id){
    $data = PortofolioModel::detail($id);
    return $data;
  }

  public function formupdate($id){
    // die($id);
    $data = PortofolioModel::detail($id);
    loadView('updateporto', $data);
  }

  public function update($id){
    global $url;
    $data = PortofolioModel::update($id,$_POST["judul"],$_POST["deskripsi"],$_POST["link"],$_POST["tanggal"]);
    header("Location:".$url."/portofolio");
  }

  public function delete($id){
    global $url;
    $data = PortofolioModel::delete($id);
    header("Location:".$url."/portofolio");
  }
}