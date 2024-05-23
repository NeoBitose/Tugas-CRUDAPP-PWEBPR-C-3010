<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/porthub/views/asset/css/style.css">
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
          <div class="form-card">
            <div class="head-card">
              <h3>Ubah Data Portofolio</h3>
              <hr>
            </div>
            <div class="body-card">
              <form action="/porthub/updateporto/<?= $data[0]['id_porto'] ?>" method="POST" class="form" enctype="multipart/form-data">

                <label for="judul">Judul Portofolio</label>
                <input class="input" name="judul" id="judul" type="text" value="<?= $data[0]['nama_porto'] ?>">
                <label for="deskripsi">Deskripsi Portofolio</label>
                <textarea class="input-text" name="deskripsi" id="deskripsi" cols="30" rows="3"><?= $data[0]['deskripsi_porto'] ?></textarea>
                <label for="link">Link Portofolio</label>
                <input class="input" name="link" id="link" type="text" value="<?= $data[0]['link_porto'] ?>">
                <label for="tanggal">Tanggal Upload</label>
                <input class="input" name="tanggal" id="tanggal" type="date" value="<?= $data[0]['tgl_upload'] ?>">
                <input type="hidden" name="id" value="<?= $data[0]['id_porto'] ?>">
                <label for="gambar">Gambar Upload</label>
                <input class="input" name="gambar" id="gambar" type="file">
                <p>Preview gambar : </p>
                <img id="img-preview" width="150" src="#" alt="">
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
  <script src="/porthub/views/asset/js/app.js"></script>
</body>

</html>