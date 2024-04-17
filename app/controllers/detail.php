<?php
require "../../app/models/PortofolioModel.php";
$data = PortofolioModel::detail($_GET['id']);