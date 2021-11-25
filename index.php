<?php
//inisialisasi session
session_start();

//mengecek username pada session
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
        <div class="container">
            <a href="index.php" class="navbar-brand">HOME</a>
            <button class="navbar-toggler" type="button" data-togle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav ml-auto pt-2 pb-2">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-light">Home</a>
                </li>
                <li class="nav-item">
                    <a href="transaksi.php" class="nav-link text-light">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link text-light"> Log Out </a>
                </li>
            </ul>
        </div>
    </nav>
    <table style="margin-left: auto; margin-right: auto; margin-top:130px;">
        <tr>
            <td style="padding-right: 30px;">
                <a href="data-pelanggan.php"> <img width="200px" height="200px" src="gambar/frozen1.jpg" width="80px" alt=""></a>
            </td>
            <td style="padding-left: 30px;">
                <a href="data-pelanggan.php"> <img width="200px" height="200px" src="gambar/frozen2.jpg" alt=""></a>
            </td>
            <td style="padding-left: 30px;">
                <a href="data-pelanggan.php"> <img width="200px" height="200px" src="gambar/frozen3.jpg" alt=""></a>
            </td>
            <td style="padding-left: 30px;">
                <a href="film.php"> <img width="200px" height="200px" src="gambar/lebih.png" alt=""></a>
            </td>

        </tr>
        <tr>
            <th style="text-align: center;">
                Frozen
            </th>
            <th style="padding-left: 30px; text-align: center;">
                Frozen 2
            </th>
            <th style="padding-left: 30px; text-align: center;">
                Frozen 3
            </th>
            <th style="padding-left: 30px; text-align: center;">
                Lainnya
            </th>
        </tr>
    </table>
    <nav class="jumbotron jumbotron-fluid bg-light" style="height:10vh">
        <div class="container">
            <a href="data-pelanggan.php" class="nav-link text-left text-drak" style="color:#000">Pesan Tiket</a>
            <a href="film.php" class="nav-link text-left text-drak" style="color:#000">Lihat Film</a>
        </div>
    </nav>
    <div class="container">
        <h3>Pembagian Sesi</h3>
        <table cellpadding="5">
            <tr>
                <td>Sesi 1</td>
                <td>Pukul 08.00 am</td>
            </tr>
            <tr>
                <td>Sesi 2</td>
                <td>Pukul 13.00 pm</td>
            </tr>
            <tr>
                <td>Sesi 3</td>
                <td>Pukul 17.00 pm</td>
            </tr>
            <tr>
                <td>Sesi 4</td>
                <td>Pukul 20.00 pm</td>
            </tr>
            <tr>
                <td>Sesi 5</td>
                <td>Pukul 22.00 pm</td>
            </tr>
        </table>
    </div>

</body>
<!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>