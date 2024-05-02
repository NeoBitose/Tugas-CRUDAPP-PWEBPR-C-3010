<?php 
function loadView($viewName, $data = []) {
  extract($data); // Extract data agar bisa diakses langsung dari view
  require_once 'views/' . $viewName . '.php';
}
?>