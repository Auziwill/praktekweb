<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$umur = $_POST['umur'];
if($email == "auzi@usm.ac.id" && $password == "12345678" && $umur >=16 && $umur <=50){
    // echo "<b>Login Berhasil</b>";
    $_SESSION['login'] = true;
    header('Location: http://localhost/praktekweb/dashboard.php');
}else{
    header('Location: http://localhost/praktekweb/index.php?error=Login Gagal');
}
