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
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="/">TwentyFour</a></h1>
            <ul>
                <li><a href="/">Dashboard</a></li>
                <li><a href="/profile">Profil</a></li>
                <li><a href="/data-produk">Data Produk</a></li>
                <li><a href="#" data-toggle="modal" data-target="#logoutModal">Keluar</a></li>
            </ul>
        </div>
    </header>

    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h1 class="mb-4">Product Detail</h1>
            <a class="btn btn-success align-middle my-auto" href="/beli/<?= $product["id_barang"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg><span class="ml-1">Beli<span></a>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <h2 class="card-title"><?= $product['nama_barang'] ?></h2>
                <img src="http://localhost/twentyfour_app/public/images/<?= $product['gambar'] ?>" width="200px" />
                <p class="card-text">Description: <?= $product['deskripsi_barang'] ?></p>
                <p class="card-text">Price: Rp<?= $product['Harga'] ?></p>
                <p class="card-text">Stock: <?= $product['Stok_barang'] ?></p>
            </div>
        </div>

        <!-- Include any additional content or styling as needed -->

    </div>
<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="/logout" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- footer -->
    <footer style="background: black; position: fixed; bottom: 0; width: 100%;">
        <div class="container text-white" style="color: white;">
            <small>Enjoy your shopping with Twenty Four</small>
        </div>
    </footer>
</body>
</html>