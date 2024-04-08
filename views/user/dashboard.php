<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/style.css">
  <title>PortHub | Dashboard</title>
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
            <div class="flex-row">
              <div class="top-card">
                <div class="desc-card">
                  <div class="flex">
                    <img src="/public/img/pp.jpeg" alt="" class="img-profile">
                    <div class="desc-img">
                      <p class="name-user">Neobitose</p>
                      <p class="desc-count">neobitose@neo.com</p>
                      <button class="btn-profile">Edit Profile</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="top-card">
                <div class="desc-card">
                  <div class="flex">
                    <img src="/public/img/icon/icon_buttons_pink.png" alt="">
                    <div class="desc-img">
                      <p class="count">150</p>
                      <p class="desc-count">Portofolio</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="porto-group">
              <div class="card-porto"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>