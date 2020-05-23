<?php
  session_start();
  require("config.php");

  if(isset($_SESSION['id']) == 0) {
    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
      $user = addslashes($_POST['username']);
      $password = md5(addslashes($_POST['password']));

      $sql = "SELECT * FROM login_sys WHERE user = '$user' AND pass = '$password'";
      $sql = $pdo->query($sql);

      if($sql->rowCount() > 0) {
        $data = $sql->fetch();
        $_SESSION['id'] = $data['id'];
        header("Location: index.php");
      }
    }
  } else {
    header("Location: index.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="src/css/style.css" rel="stylesheet">

  <title>Login</title>
</head>
<body>
  <div class="login-box">
    <img src="src/img/do-utilizador.svg" class="user-icon">
    <form method="POST" class="form">
      <label for="username">Username</label>
      <input type="text" name="username">
      <label for="password">Password</label>
      <input type="password" name="password">

      <input type="submit" value="Login">

      <a href="#">Lost your Password?</a>
      <a href="#">Don't have an Account</a>
    </form>
  </div>
</body>
</html>