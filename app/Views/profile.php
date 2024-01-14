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
                <li><a href="/">Dashboard</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/data-produk">Data Produk</a></li>
                <li><a href="/keluar">Keluar</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Profile</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required>
                    <input type="text" name="user" placeholder="Username" class="input-control" required>
                    <input type="text" name="no telepon" placeholder="No telepon" class="input-control" required>
                    <input type="text" name="email" placeholder="Email" class="input-control" required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" required>
                    <input type="submit" name="submit" value="Ubah Profil" class="btn">
                
                </form>

            </div>
            <h3>Ubah Password</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
                    <input type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
                    <input type="submit" name="ubah_password" value="Ubah Password" class="btn">
                
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
</body>
</html>