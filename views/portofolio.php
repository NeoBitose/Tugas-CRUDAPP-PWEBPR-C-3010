<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="views/asset/css/style.css">
  <title>PortHub | Portofolio</title>
</head>

<body>
  <div class="container">
    <div class="bg"></div>
    <div class="content flex-row">
    <?php include 'views/components/sidenav-user.php'?>
      <div class="main-board">
        <div class="head-board">
          <?php include 'views/components/top-nav.php'?>
        </div>
        <div class="board">
          <div class="flex-column">
            <div class="card-table">
              <div class="head-card">
                <h3>Table Portofolio</h3>
                <hr>
              </div>
              <div class="body-card">
                <a href="/porthub/portofoliocreate">
                  <button class="create-btn">Tambah Data</button>
                </a>
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
                    for ($i=0; $i < count($data); $i++) { 
                  ?>
                  <tr>
                    <td><?= $i+1?></td>
                    <td><?= $data[$i]['nama_porto']; ?></td>
                    <td><a href="<?= $data[$i]['link_porto']; ?>"><?= $data[$i]['link_porto']; ?></a></td>
                    <td><?= $data[$i]['tgl_upload']; ?></td>
                    <td><?= $data[$i]['username']; ?></td>
                    <td>
                      <div class="grup-action-btn">
                        <a href="/porthub/portofolioupdate/<?= $data[$i]['id_porto']?>">
                          <button class="edit-btn">Edit</button>
                        </a>
                        <a href="/porthub/deleteporto/<?= $data[$i]['id_porto']?>" onclick="return confirm('Are you sure you want to delete this item?');">
                          <button class="delete-btn">Hapus</button>
                        </a>
                      </div>
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