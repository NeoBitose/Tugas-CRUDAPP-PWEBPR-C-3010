<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_porthub';

$conn = new mysqli($host, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
echo("koneksi sukses");
