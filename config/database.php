<?php 
require_once 'env.php';

$app_name = $_ENV['APP_NAME'];
$url = $_ENV['BASEURL'];
$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

try {
  $conn = new mysqli($host, $username, $password, $database);
} catch (\Throwable $e) {
  $loc = 'Location: '.$url.'/views/errors/500.php?message='.$e;
  header($loc);
}