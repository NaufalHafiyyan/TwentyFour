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

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4 class="text-center">Welcome to TwentyFour</h4>
            </div>
            
            <div class="row mt-4">
            <?php
    // Assume $products is an array containing product data from the database
    foreach ($result as $product) {
        echo '<div class="col col-4">';
        
        // Use base_url() to generate the correct URL
        $detail_url = base_url('produk-detail/' . $product['id_barang']);
        $gambar_url = 'http://localhost/twentyfour_app/public/images/' . $product["gambar"];
        // Use anchor() to create the anchor link
        echo anchor($detail_url, '<div class="card mb-4">
            <img src="' . $gambar_url . '" class="card-img-top" width="200px" alt="Product Image">
            <div class="card-body">
                <h5 class="card-title">' . $product['nama_barang'] . '</h5>
                <p class="card-text">Harga: ' . $product['Harga'] . '</p>
            </div>
        </div>', 'style="text-decoration: none; color: inherit;"');
        
        echo '</div>';
    }
?>
            </div>
            </div>
        </div>  
    </div>

    <!-- footer -->
    <footer style="background: black; position: fixed; bottom: 0; width: 100%;">
        <div class="container text-white" style="color: white;">
            <small>Enjoy your shopping with Twenty Four</small>
        </div>
    </footer>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>