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
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang</h4>
            </div>
            <div class="row mt-4" style="display: flex;">
                <?php
                // Assume $products is an array containing product data from the database
                foreach ($result as $product) {
                    echo '<div class="col col-4">';
                    echo '<div class="card mb-4">';
                    // Assuming $product['gambar'] contains the image filename
                    $gambar_url = 'http://localhost/twentyfour_app/public/images/' . $product["gambar"];
                    echo '<img src="' . $gambar_url . '" class="card-img-top" width="200px" alt="Product Image">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $product['nama_barang'] . '</h5>';
                    echo '<p class="card-text">Harga: ' . $product['Harga'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

            </div>
        </div>  
    </div>

    <!-- footer -->
    <footer style="background: black;">
        <div class="container text-white" style="color: white;">
            <small>Enjoy your shopping with Twenty Four</small>
        </div>
    </footer>
</body>
</html>