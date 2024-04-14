<?php 
  require '../../app/controllers/PortofolioController.php';
  $rows = PortofolioController::index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/style.css">
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
            <div class="card-table">
              <div class="title-table">
                <h3>Table Portofolio</h3>
                <hr>
              </div>
              <div class="main-table">
                <button class="create-btn">Tambah Data</button>
                <table class="table" cellspacing="0">
                  <tr>
                    <th>No</th>
                    <th>Judul Portofolio</th>
                    <th>Link</th>
                    <th>Tanggal Upload</th>
                    <th>Nama Pengguna</th>
                    <th>Aksi</th>
                  </tr>
                  <?php 
                    for ($i=0; $i < count($rows); $i++) { 
                  ?>
                  <tr>
                    <td>1</td>
                    <td><?= $rows[$i]['nama_porto']; ?></td>
                    <td><a href="<?= $rows[$i]['link_porto']; ?>"><?= $rows[$i]['link_porto']; ?></a></td>
                    <td><?= $rows[$i]['tgl_upload']; ?></td>
                    <td><?= $rows[$i]['username']; ?></td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Hapus</button></div>
                    </td>
                  </tr>
                  <?php 
                    }
                  ?>  
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