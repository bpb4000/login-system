<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <title>Login</title>

  <style>
    body {
      margin: 0;
      padding: 20px;
      display: flex;
      font-family: Roboto;
      align-items: center;
      justify-content: space-around;
    }

    h1 {
      margin: 0;
      padding: 0;
      font-size: 24px;
    }

    a {
      font-size: 24px;
      text-decoration: none;
      color: #9c9c9c;
      font-weight: bold;
    }

    a:hover{
      color: #ff4747;
    }
  </style>
</head>
<body>
  <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { 
  ?>
    <h1>Successfully logged in!</h1><br>
    <a href="logout.php">Logout</a>
  <?php 
    } else {
      header("Location: login.php");
    }
  ?>
</body>
</html>