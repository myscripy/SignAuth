<?php
session_start();


$alert = $_GET['alert'];
$alertText = $_GET['alertText'];
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
            <div class="box-1">
                <div class="image">
                    <img width="120" height="120" src="logo.png" alt="" />
                </div>
                <div class="text my-3">
                    <h1>Daftar</h1>
                    <p>
                        Daftar Akun?
                    </p>
                </div>
                <div class="<?php echo $alertText; ?>">
                    <?php echo $alert; ?>
                </div>
                <div class="mt-2">
                    <form action="proses/prosesDaftar.php" method="POST" accept-charset="utf-8">
                        <div class="form-group my-4 text-left">
                            <label for="Nama Lengkap">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control w-100" placeholder="Nama Lengkap" />
                        </div>
                        <div class="form-group my-4 text-left">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control w-100" placeholder="contoh@gmail.com" />
                        </div>
                        <div class="form-group my-4 text-left">
                            <label for="Email">Password</label>
                            <input type="password" name="passw" class="form-control w-100" placeholder="Kata Sandi" />
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Mendaftar</button>
                        <div class="mt-2 text-left">
                            Sudah punya akun? <a href="masuk.php">Masuk</a>
                        </div>
                    </form>
                    <div class="mt-3 text-left">
                        © 2023 Seescripy. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>