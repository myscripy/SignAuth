<?php
require_once "../koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$uuid = rand(1,99999);
$name = $_POST['nama'];
$email = $_POST['email'];
$passw = md5($_POST['passw']);
$dates = date("H:i M, d Y");
$data = "INSERT INTO users VALUES ('','$uuid','$name','$email','$passw','$dates','0')";
mysqli_query($kon,$data);
session_start();
$_SESSION['alert'] = "Berhasil Mendaftar! Salin OTP : ";
$_SESSION['otp'] = $uuid;
$_SESSION['alert-on'] = "w-100 text-center alert alert-success";
header("Location: ../masuk.php");
?>