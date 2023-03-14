<?php

session_start();

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
            <div class="box">
                <div class="image">
                    <img width="120" height="120" src="logo.png" alt="" />
                </div>
                <div class="text my-3">
                    <h1>Log In</h1>
                    <p>
                        Booking Kamar Hotel di Buana GUI Hotel.
                    </p>
                </div>
                <div class="<?php echo $_SESSION['alert-on']; ?>">
                    <?php 
                    echo $_SESSION['alert'];
                    echo " ".$_SESSION['otp'];
                    ?> 
                </div>
                <div class="mt-2">
                    <form action="proses/prosesMasuk.php" method="POST" accept-charset="utf-8">
                        <div class="form-group my-4 text-left">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control w-100" placeholder="contoh@gmail.com" />
                        </div>
                        <div class="form-group my-4 text-left">
                            <label for="Email">Password</label>
                            <input type="password" name="passw" class="form-control w-100" placeholder="Kata Sandi" />
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Masuk</button>
                        <div class="mt-2 text-left">
                            Belum pumya akun? <a href="daftar.php">Daftar</a>
                        </div>
                    </form>
                    <div class="mt-2 text-left">
                        © 2023 Seescripy. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>