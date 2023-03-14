<?php
session_start();
if(!$_SESSION['email']){
    header("Location: daftar.php");
}

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
    <div id="wrappes" class="w-100 mx-auto p-3">
        <div class="jumbotron">
            <h1 class="display-4">Hello, <?php echo $_SESSION['nama']; ?></h1>
            <p class="lead">
                , <?php echo $_SESSION['email']; ?>
            </p>
            <hr class="my-4">
            <p>
                It uses utility classes for typography and spacing to space content out within the larger container.
            </p>
            <a class="btn btn-primary btn-lg" href="logout.php" role="button">Keluar</a>
        </div>
    </div>
</body>
</html>