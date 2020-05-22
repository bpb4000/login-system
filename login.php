<?php
  session_start();
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
      <input type="text">
      <label for="password">Password</label>
      <input type="password">

      <input type="submit" value="Login">

      <a href="#">Lost your Password?</a>
      <a href="#">Don't have an Account</a>
    </form>
  </div>
</body>
</html>