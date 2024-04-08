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
      <?php include '../components/sidenav-admin.php'?>
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
                <table class="table" cellspacing="0">
                  <tr>
                    <th>No</th>
                    <th>Judul Portofolio</th>
                    <th>Link</th>
                    <th>Tanggal Upload</th>
                    <th>Nama Pengguna</th>
                    <th>Aksi</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Website Admin</td>
                    <td><a href="hmifunej.id">https://website.com</a></td>
                    <td>4 Mar 2024</td>
                    <td>Neobitose Ramadhan</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="delete-btn">Nonaktifkan</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Poster Lingkungan</td>
                    <td><a href="hajarif.hmihunej.id">https://drive.google.com</a></td>
                    <td>12 Jan 2024</td>
                    <td>Ahmad Alif Ramadhan</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="delete-btn">Nonaktifkan</button>
                        <!-- <a href="action-btn"><img src="/public/img/icon/edit.svg" alt=""></a>
                        <a href="action-btn"><img src="/public/img/icon/trash.svg" alt=""></a> -->
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Karya Tulis Ilmiah</td>
                    <td><a href="ifmerch.hmifunej.id">https://drive.google.com</a></td>
                    <td>30 Feb 2024</td>
                    <td>Nopal Bigzy</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="delete-btn">Nonaktifkan</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Aplikasi Siakad</td>
                    <td><a href="s.hmifunej.id">https://siakad.com</a></td>
                    <td>1 Apr 2024</td>
                    <td>Thanos</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="delete-btn">Nonaktifkan</button>
                      </div>
                    </td>
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