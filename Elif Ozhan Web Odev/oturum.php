<?php
// login.php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Check if both fields are filled
  if(empty($username) || empty($password)) {
    header("Location: login.php");
    exit;
  }

  // Check if username is a valid email address
  if(!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    header("Location: login.php");
    exit;
  }

  // Check if username and password are correct
  $correct_username = "b221210001@sakarya.edu.tr";
  $correct_password = "b221210001";

  if($username == $correct_username && $password == $correct_password) {
    echo ("Location: hosgeldiniz.html");
  } else {
    header("Location: oturum.html");
    exit;
  }
}
?>

<form method="POST" action="login.php">
  Kullanıcı Adı: <input type="text" name="username"><br>
  Şifre: <input type="password" name="password"><br>
  <input type="submit" value="Giriş Yap">
</form>