<?php
include_once("config.php");

$message = ""; // Initialize an empty message

// Proses input data
if (isset($_POST['submit'])) {
    // Ambil data dari formulir
    $nama_produk = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $size = $_POST['size'];

    // Handle file upload
    $targetDir = "Images/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $nameFile = basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $message = "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
        $message = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedExtensions)) {
        $message = "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $message = "Sorry, your file was not uploaded.";
    // If everything is ok, try to upload file
    } else {
        // Create the target directory if it doesn't exist
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            // File uploaded successfully, now update the SQL query
            $sql = "INSERT INTO barang (nama_barang, Harga, Stok_barang, deskripsi_barang, Size_barang, gambar) 
                    VALUES ('$nama_produk', '$harga', '$stok', '$deskripsi', '$size', '$nameFile')";

            $result = mysqli_query($mysqli, $sql);

            if ($result) {
                $message = "Data berhasil ditambahkan";
            } else {
                $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            $message = "Sorry, there was an error uploading your file.";
        }
    }

}
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
            <h3>Tambah Data Produk</h3>
            <h4 class="text-success"><?php echo $message; ?></h4>
            <div class="box">
                <form method="POST" enctype="multipart/form-data">
                <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
                <input type="text" name="harga" class="input-control" placeholder="Harga" required>
                <input type="text" name="stok" class="input-control" placeholder="Stok Barang" required>
                <input type="file" name="file" class="form-control" required>
                <!-- Remove the file input for simplicity -->
                <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                <select class="input-control" name="size">
                    <option value="">Size</option>
                    <option value="XXL">XXL</option>
                    <option value="XL">XL</option>
                    <option value="L">L</option>
                    <option value="M">M</option>
                    <option value="S">S</option>
                </select>
                <!-- Change the input type to button -->
                <button type="submit" name="submit" class="btn">Submit</button>
                </form>
            </div>
            
        </div>  
    </div>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- footer -->
    <footer style="background: black; position: fixed; bottom: 0; width: 100%;">
        <div class="container">
            <small style="color: white;">Enjoy your shopping with Twenty Four</small>
        </div>
    </footer>
    <script>
        CKEDITOR.replace('deskripsi');
    </script>
</body>
</html>