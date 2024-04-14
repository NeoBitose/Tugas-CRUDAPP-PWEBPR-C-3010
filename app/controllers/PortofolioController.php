<?php
require "../../app/models/PortofolioModel.php";
class PortofolioController{

  static function index(){
    $data = PortofolioModel::read();
    return $data;
  }

  public static function createForm(){
    header("Location: http://localhost/views/user/portofolio/create.php");
  }

  public static function create($nama, $deskripsi, $link, $tgl){
    
  }

  public static function detail($id){
    
  }

  public static function updateForm($id){
    header("Location: http://localhost/views/user/portofolio/update.php");
  }

  public static function update($id, $nama, $deskripsi, $link, $tgl){
    
  }

  public static function delete($id){
    
  }
}