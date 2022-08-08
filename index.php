<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="login_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  </head>
  <body>
    <div class="login">
      <center>
      <br>
      <img src="img/logo.png" width="100" height="100" class="logo">
      </center>
      <h2>Selamat Datang di</h2>
      <h1>Theodorus no Sonzai!</h1>
      <h3>Silahkan Login</h3>
      <form action="otentikasi.php" method="post">
        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
          <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login">
      </form>
    </div>
  </body>
</html>