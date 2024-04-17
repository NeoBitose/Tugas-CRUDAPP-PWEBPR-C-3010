<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/porthub/views/asset/css/style.css">
  <title>PortHub | Dashboard</title>
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
            <div class="flex-row">
              <div class="top-card">
                <div class="desc-card">
                  <div class="flex">
                    <img src="/public/img/icon/icon_buttons_blue.png" alt="">
                    <div class="desc-img">
                      <p class="count">10</p>
                      <p class="desc-count">Portofolio Terbaik</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="top-card">
                <div class="desc-card">
                  <div class="flex">
                    <img src="/public/img/icon/icon_buttons_green.png" alt="">
                    <div class="desc-img">
                      <p class="count">230</p>
                      <p class="desc-count">Pengguna Aplikasi</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="top-card">
                <div class="desc-card">
                  <div class="flex">
                    <img src="/public/img/icon/icon_buttons_pink.png" alt="">
                    <div class="desc-img">
                      <p class="count">1,530</p>
                      <p class="desc-count">Portofolio</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-table">
              <div class="head-card">
                <h3>Table Portofolio</h3>
                <hr>
              </div>
              <div class="body-card">
                <table class="table" cellspacing="0">
                  <tr>
                    <th>No</th>
                    <th>Judul Portofolio</th>
                    <th>Link</th>
                    <th>Tanggal Upload</th>
                    <th>Nama Pengguna</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Website Admin</td>
                    <td><a href="hmifunej.id">https://website.com</a></td>
                    <td>4 Mar 2024</td>
                    <td>Neobitose Ramadhan</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Poster Lingkungan</td>
                    <td><a href="hajarif.hmihunej.id">https://drive.google.com</a></td>
                    <td>12 Jan 2024</td>
                    <td>Ahmad Alif Ramadhan</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Karya Tulis Ilmiah</td>
                    <td><a href="ifmerch.hmifunej.id">https://drive.google.com</a></td>
                    <td>30 Feb 2024</td>
                    <td>Nopal Bigzy</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Aplikasi Siakad</td>
                    <td><a href="s.hmifunej.id">https://siakad.com</a></td>
                    <td>1 Apr 2024</td>
                    <td>Thanos</td>
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