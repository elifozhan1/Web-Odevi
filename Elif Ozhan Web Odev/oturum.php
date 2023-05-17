<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $username = $_POST['username'];
  $password = $_POST['password'];
}

if ($username == 'b221210001@sakarya.edu.tr' && $password == 'b221210001') {
    
    header("Location: hosgeldiniz.html");
} else {

    header("Location: hata.html");
}
?>