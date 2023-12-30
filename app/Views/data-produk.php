<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM barang")
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Twenty Four</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="/">TwentyFour</a></h1>
            <ul>
                <li><a href="/">Dashboard</a></li>
                <li><a href="/profile">Profil</a></li>
                <li><a href="/data-kategori">Data Kategori</a></li>
                <li><a href="/data-produk">Data Produk</a></li>
                <li><a href="/keluar">Keluar</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Data Produk</h3>
            <div class="box">
                <p><a href="tambah-produk.php">Tambah Data</a></p>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($data_barang = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td>".$data_barang["id_barang"]."</td>";
                                echo "<td>".$data_barang["Harga"]."</td>";
                                echo "<td>".$data_barang["Stok_barang"]."</td>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "</tr>";
                            }
                        ?>
            </table>
            </div>
        </div>  
    </div>


</body>
</html>