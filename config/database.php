<?php 

$app_name = 'porthub';
$url = 'http://localhost/'.$app_name;
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_porthub';

try {
  $conn = new mysqli($host, $username, $password, $database);
} catch (\Throwable $e) {

  header('Location: '.$url.'/views/errors/500.php?message="'.$e.'"');
}

