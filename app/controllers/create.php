<?php
require "../../app/models/PortofolioModel.php";
global $url;
$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$link = $_POST["link"];
$tanggal = $_POST["tanggal"];
$data = PortofolioModel::create($judul,$deskripsi,$link,$tanggal);
header("Location:".$url."/views/user/portofolio.php");
