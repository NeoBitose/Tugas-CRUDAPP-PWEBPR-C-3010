<?php
require "../../app/models/PortofolioModel.php";
class PortofolioController{

  static function index(){
    $data = PortofolioModel::read();
    return $data;
  }

  public static function create(){
    
  }

  public static function detail($id){
    
  }

  public static function update($id){
    
  }

  public static function delete($id){
    
  }
}