<?php
require "../../app/models/PortofolioModel.php";
global $url;
$id = $_POST["id"];
$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$link = $_POST["link"];
$tanggal = $_POST["tanggal"];
$data = PortofolioModel::update($id,$judul,$deskripsi,$link,$tanggal);
header("Location:".$url."/views/user/portofolio.php");