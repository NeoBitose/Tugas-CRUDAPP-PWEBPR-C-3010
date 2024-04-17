<?php
require "../../app/models/PortofolioModel.php";
global $url;
$id = $_GET["id"];
$data = PortofolioModel::delete($id);
header("Location:".$url."/views/user/portofolio.php");