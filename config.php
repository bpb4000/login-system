<?php
  $dsn = "mysql:dbname=login_system;host=localhost";
  $dbuser = "root";
  $dbpassword = "root";

  try {
    $pdo = new PDO($dsn, $dbuser, $dbpassword);
  } catch (PDOException $ex) {
    echo "Error ==> ".$ex->getMessage();
  }
?>