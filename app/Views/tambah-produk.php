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
            <h1><a href="dashboard.php">TwentyFour</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Tambah Data Produk</h3>
            <div class="box">
                <form action="" method="POST">
                    <select class="input-control" name="kategori" required>
                        <option value="">--Pilih--</option>
                    </select>
                    <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
                    <input type="text" name="harga" class="input-control" placeholder="Harga" required>
                    <input type="file" name="gambar" class="input-control" required>
                    <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                    <select class="input-control" name="status">
                        <option value="">--Pilih--</option>
                        <option value="1">--Aktif--</option>
                        <option value="0">--Tidak Aktif--</option>
                    <input type="submit" name="submit" value="Submit" class="btn">
                    </select>
                
                </form>

            </div>
            
        </div>  
    </div>

    

    <!-- footer -->
    <footer>
        <div class="container">
            <small>Enjoy your shopping with Twenty Four</small>
        </div>
    </footer>
    <script>
        CKEDITOR.replace('deskripsi');
    </script>
</body>
</html>