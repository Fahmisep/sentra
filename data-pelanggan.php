<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="pilihan.css">
</head>

<body>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
        <div class="container">
            <a href="transaksi.php" class="navbar-brand">Film</a>
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
                <li class="nav-item ml-4">
                    <a href="logout.php" class="nav-link text-light"> Log Out </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid bg-light" style="height:10vh">
        <div class="container">
            <form action="tiket.php" method="post">
                <div class="row">
                    <?php
                    // mengdefiniskan variabel dan diset kosong
                    $name = $date = $tempat =  $film = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name     = $_POST["nama"];
                        $date  = $_POST["tgl"];
                        $film  = $_POST["film"];
                        $tempat   = $_POST["tempat"];
                    }
                    ?>
                    <!DOCTYPE html>

                    <head>
                        <title>Kirim Data Form PHP</title>
                    </head>

                    <body>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <table>
                                <tr>
                                    <td>Nama Lengkap </td>
                                    <td><input type="text" name="nama"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal </td>
                                    <td><input type='date' name='tgl' /></td>
                                </tr>
                                <tr>
                                    <td>Judul Film</td>
                                    <td>
                                        <select name="film">
                                            <option value="Frozen">Frozen</option>
                                            <option value="Frozen 2">Frozen 2</option>
                                            <option value="Frozen 3">Frozen 3</option>
                                            <option value="Sniper Legacy">Sniper Legacy</option>
                                            <option value="Sniper Ghost Shooter">Sniper Ghost Shooter</option>
                                            <option value="Sniper Reloaded">Sniper Reloaded</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat Duduk</td>
                                    <td>
                                        <select name="tempat">
                                            <option value="Biasa">Biasa</option>
                                            <option value="VIP">VIP</option>
                                            <option value="VVIP">VVIP</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sesi</td>
                                    <td>
                                        <select name="sesi">
                                            <option value="Sesi 1">1</option>
                                            <option value="Sesi 2">2</option>
                                            <option value="Sesi 3">3</option>
                                            <option value="Sesi 4">4</option>
                                            <option value="Sesi 5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Simpan" name="simpan"></td>
                                </tr>
                            </table>
                        </form>

                    </body>

</html>
</div>
</div>