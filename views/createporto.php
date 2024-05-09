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
    <?php include 'components/sidenav-user.php'?>
      <div class="main-board">
        <div class="head-board">
          <?php include 'components/top-nav.php'?>
        </div>
        <div class="board">
          <div class="flex-column">
          <div class="form-card">
            <div class="head-card">
              <h3>Tambah Data Portofolio</h3>
              <hr>
            </div>
            <div class="body-card">
              <form action="createporto" method="POST" class="form">
                <label for="judul">Judul Portofolio</label>
                <input class="input" name="judul" id="judul" type="text">
                <label for="deskripsi">Deskripsi Portofolio</label>
                <textarea class="input-text" name="deskripsi" id="deskripsi" cols="30" rows="3"></textarea>
                <label for="link">Link Portofolio</label>
                <input class="input" name="link" id="link" type="text">
                <label for="tanggal">Tanggal Upload</label>
                <input class="input" name="tanggal" id="tanggal" type="date">
                <br>
                <button class="button-submit" type="submit">Kirim</button>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>