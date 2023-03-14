<?php

require_once "../koneksi.php";

$email = $_POST['email'];


$data = "SELECT * FROM users WHERE email='$email'";
$sql = mysqli_query($kon,$data);
$row = mysqli_fetch_array($sql);
$nama = $row['nama'];

if($row['verify'] == "1"){
    $passw = md5($_POST['passw']);
    
    $data2 = "SELECT * FROM users WHERE email='$email' && passw='$passw'";
    $sql2 = mysqli_query($kon,$data2);
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['nama'] = $nama;
    header("Location: ../index.php");
}else{
    session_start();
    $_SESSION['email'] = $email;
    header("Location: ../verifikasi.php");
}