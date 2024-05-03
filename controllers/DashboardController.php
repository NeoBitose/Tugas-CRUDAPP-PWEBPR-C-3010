<?php
require_once "function/function.php";

class DashboardController{
  
  public function index(){
    loadView('dashboard');
  }
}