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
            <h3>Data Produk</h3>
            <div class="box">
                <p><a href="/tambah-produk">Tambah Data</a></p>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr class="text-center">
                            <th width="60px">No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($data_barang = mysqli_fetch_array($result)) {
                                echo "<tr style='text-align: center;'>";
                                echo "<td>".$data_barang["id_barang"]."</td>";
                                echo "<td>".$data_barang["nama_barang"]."</td>";
                                echo "<td>".$data_barang["Harga"]."</td>";
                                echo "<td>".$data_barang["Stok_barang"]."</td>";
                                echo "<td>".$data_barang["deskripsi_barang"]."</td>";
                                $gambar_url = 'http://localhost/twentyfour_app/public/images/' . $data_barang["gambar"];
                                echo "<td><img src='" . $gambar_url . "' alt='Gambar Produk' width='50px'></td>";
                                echo "<td></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
            </table>
            </div>
        </div>  
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>