<?php
require "../../app/models/PortofolioModel.php";
global $url;
$id = $_POST["id"];
$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$link = $_POST["link"];
$tanggal = date('Y-m-d',strtotime($_POST["tanggal"]));
$data = PortofolioModel::create($id,$judul,$deskripsi,$link,$tanggal);
header("Location:".$url."/views/user/portofolio.php");