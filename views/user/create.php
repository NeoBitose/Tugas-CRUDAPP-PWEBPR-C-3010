<?php 
  require '../../app/controllers/PortofolioController.php';
  $rows = PortofolioController::index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/views/asset/css/style.css">
  <title>PortHub | Portofolio</title>
</head>

<body>
  <div class="container">
    <div class="bg"></div>
    <div class="content flex-row">
    <?php include '../components/sidenav-user.php'?>
      <div class="main-board">
        <div class="head-board">
          <div class="left"><input type="search" name="search" id="search" class="search" placeholder="Search..."></div>
          <div class="right">
            <?php include '../components/top-nav.php'?>
          </div>
        </div>
        <div class="board">
          <div class="flex-column">
            <div class="card-create">
              <div class="title-card-form">
                <h3>Tambah Data</h3>
                <hr>
              </div>
              <div class="main-card-form">
                <table class="table" cellspacing="0">
                    <tr>
                      <th>No</th>
                      <th>Judul Portofolio</th>
                      <th>Link</th>
                      <th>Tanggal Upload</th>
                      <th>Nama Pengguna</th>
                      <th>Aksi</th>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>