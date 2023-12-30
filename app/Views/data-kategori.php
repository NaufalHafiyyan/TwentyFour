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
            <h3>Kategori</h3>
            <div class="box">
                <p><a href="tambah-kategori.php">Tambah Data</a></p>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Kategori</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>data di database</td>
                            <td>
                                <a href="edit-kategori.php">Edit</a> || <a href="proses-hapus.php">Hapus</a>
                            </td>
                        </tr>
            </div>
        </div>  
    </div>


</body>
</html>