<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === 'B221210001@sakarya.edu.tr' && $password === 'B221210001') {

    header("Location: hosgeldiniz.html");
    exit;
  } else {

    header("Location: hata.html");
    exit;
  }
}
?>