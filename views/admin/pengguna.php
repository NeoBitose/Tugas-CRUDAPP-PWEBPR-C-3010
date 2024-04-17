<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/porthub/views/asset/css/style.css">
  <title>PortHub | Pengguna</title>
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
              <div class="head-card">
                <h3>Table Pengguna</h3>
                <hr>
              </div>
              <div class="body-card">
                <table class="table" cellspacing="0">
                  <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                  <tr>
                    <td>1</td>
                    <td>neobitose@neo.com</td>
                    <td>Neobitose</td>
                    <td>Neobitose Ramadhan</td>
                    <td>22241010XXXX</td>
                    <td>083-XXX-XXX-XXX</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="detail-btn">Detail</button></div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ramadhanalif430@gmail.com</td>
                    <td>Alif_ramadhaann</td>
                    <td>Ahmad Alif Ramadhan</td>
                    <td>222410103010</td>
                    <td>082-XXX-XXX-XXX</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="detail-btn">Detail</button></div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>nopal_bigzy@gmail.com</td>
                    <td>Nopal123</td>
                    <td>Nopal Bigzy</td>
                    <td>22241010XXXX</td>
                    <td>081-XXX-XXX-XXX</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="detail-btn">Detail</button></div>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>thanos123@gmail.com</td>
                    <td>Thanos123</td>
                    <td>Thanos</td>
                    <td>22241010XXXX</td>
                    <td>085-XXX-XXX-XXX</td>
                    <td>
                      <div class="grup-action-btn">
                        <button class="detail-btn">Detail</button></div>
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