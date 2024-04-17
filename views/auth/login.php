<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login User</title>
  <link rel="stylesheet" href="/porthub/views/asset/css/form-auth.css">
</head>

<body>
  <div class="container">
    <div class="cover">
      <form name="form-login" action="/porthub/views/user/dashboard.php" method="post" onsubmit="return validateLogin()" class="form">
        <div class="head-form">
          <h1 class="title-form">Selamat Datang Kembali!</h1>
          <span>Silahkan masuk ke akun anda</span>
        </div>
        <div class="flex"><hr class="hr-violet"><a href="/porthub//views/auth/register.php"><hr class="hr-grey"></a></div>
        <div class="main-form">
          <div class="username input">
            <label class="label" for="username">Username</label>
            <input class="form-input" type="text" name="username" id="username">
            <small class="red-text" id="message-username"></small>
          </div>
          <div class="password input">
            <label class="label" for="password">Password</label>
            <input class="form-input" type="password" name="password" id="password">
            <small class="red-text" id="message-password"></small>
          </div>
          <button type="submit" class="btn-form">Submit</button>
        </div>
        <div class="footer-form">
          <p>Belum punya akun ? <a href="/porthub/views/auth/register.php">Daftar</a></p>
        </div>
      </form>
    </div>
  </div>

</body>

</html>