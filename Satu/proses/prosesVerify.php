<?php
session_start();
require_once "../koneksi.php";
$otp = $_POST['otp'];
$data = "SELECT * FROM users WHERE uuid='$otp'";
$sql = mysqli_query($kon,$data);
$row = mysqli_fetch_array($sql);
$nama = $row['nama'];
$email = $row['email'];
if($otp == $row['uuid']){
    $data2 = "UPDATE users SET verify = '1' WHERE uuid='$otp'";
    mysqli_query($kon,$data2);
    session_start();
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    header("Location: ../index.php");
}else{
    session_start();
    $_SESSION['email'] = $email;
    header("Location: ../verifikasi.php");
}