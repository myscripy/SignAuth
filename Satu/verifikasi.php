<?php
session_start();
error_reporting(0);
require_once "koneksi.php";
$email = $_SESSION['email'];
if(!$email){
    header("Location: daftar.php");
}
$data = "SELECT * FROM users WHERE email='$email'";
$sql = mysqli_query($kon,$data);
$row = mysqli_fetch_array($sql);


if($email == $row['email']){
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Selamat Datang di Seescripy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    </head>
    <body>
        <div id="wrappes">
            <div class="box-2">
                <div class="image">
                    <img width="120" height="120" src="logo.png" alt="" />
                </div>
                <div class="text my-3">
                    <h1>Verifikasi Akun</h1>
                    <p>
                        Kode OTP telah terkirim. Pastikan anda telah menyalin kode OTP yang diberikan.
                    </p>
                </div>
                <div class="mt-2">
                    <form action="proses/prosesVerify.php" method="POST" accept-charset="utf-8">
                        <div class="form-group my-3">
                            <label for="OTP">OTP</label>
                            <input type="text" name="otp" class="form-control w-100" placeholder="OTP : XXX51" />
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Verify</button>

                    </form>
                    <div class="mt-3 text-left">
                        © 2023 Seescripy. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }else{
    $alert = "Alamat Email Tidak Terdaftar! Silahkan Daftar :)";
    $textAlert = "w-100 text-center alert alert-danger";
    header("Location: daftar.php?alert=".$alert."&alertText=".$textAlert."&=");
}
?>