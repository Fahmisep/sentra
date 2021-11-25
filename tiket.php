<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="pilihan.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style> </style>
</head>

<body>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
        <div class="container">
            <a href="transaksi.php" class="navbar-brand">Transaksi</a>
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


    <?php
    if (isset($_POST['simpan'])) {
        $kode_unik = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890zyxwvutsrqponmlkjihgfedcba"), 14, 10);
        echo  '<table style="margin-left: auto; margin-right: auto; margin-top: 140px;" bgcolor="#DCDCDC">';
        echo '</td><td>' . $_POST['nama'] . '</td></tr>';
        echo '</td><td>' . $_POST['film'] . '</td></tr>';
        echo '</td><td>' . $_POST['tgl'] . '</td></tr>';
        echo '</td><td>' . "Pukul 16.00 WIB" . '</td></tr>';
        echo '</td><td>' . $_POST['sesi'] . '</td></tr>';
        echo '</td><td>' . $_POST['tempat'] . '</td></tr>';
        echo '</td><td>'. "<strong>Kode Tukar : $kode_unik</strong>";
        echo '</table>';
    }
    ?>