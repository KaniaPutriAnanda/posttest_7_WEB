<?php

    require 'config.php';

    // Menangkap id dari url yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Tampilkan value inputan dari id
    $result = mysqli_query($db, 
        "SELECT * FROM kacans WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $nohp = $_POST['nohp'];
        $kategori = $_POST['kategori'];
        $versi = $_POST['versi'];
        $kuantitas = $_POST['kuantitas'];
        $harga = $_POST['harga'];
        $tanggal = $_POST['tanggal'];
        $alamat = $_POST['alamat'];
        $pembayaran = $_POST['pembayaran'];
        

        $result = mysqli_query($db, 
        "UPDATE kacans SET 
            nama='$nama',
            nohp='$nohp',
            kategori='$kategori',
            versi='$versi',
            kuantitas='$kuantitas',
            harga='$harga',
            tanggal='$tanggal',
            alamat='$alamat',
            pembayaran='$pembayaran' 
        WHERE id='$id'");

        if($result){
            echo "
                <script>
                    alert('Data Berhasil di Update');
                    document.location.href = 'show2.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Dikirim');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kacans.css?v5">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Document</title>
</head>
<body>
<div class="logo">
        <a href="kacans.html"><h3>Kacansg</h3></a>
        </div>

    <i class="bi bi-brightness-high-fill" id="toggleDark"></i>

    <nav class="navi">
        <a href="joinUs.php">Join Us</a>
        <a href="contact_kacans.php">Contact</a>
        <a href="about_kacans.php">About Me</a>
        <a href="category.php">Category</a>
        <a href="kacans.php">Home</a>
    </nav>

    <div class="edit">Edit Data</div>

    <div class="kotak7">
        <form action="" method = "post">
            
            <label for="">Name of Buyer: </label>
            <input type="text" name="nama" value=<?=$row['nama']?>> <br>

            <label for="">Number Phone: </label>
            <input type="number" name="nohp" value=<?=$row['nohp']?>> <br>

            <label for="">Kategori: </label>
            <select name="kategori" id="" value=<?=$row['kategori']?>>
                <option value="pc">--Choose--</option>
                <option value="pc">Photo Card</option>
                <option value="ls">Light Stick</option>
                <option value="album">Album</option>
            </select> <br>

            <label for="">Album Version: </label>
            <input type="text" name="versi" value=<?=$row['versi']?>> <br>

            <label for="">Quantity: </label>
            <input type="text" name="kuantitas" min="1" max="100" value=<?=$row['kuantitas']?>> <br>

            <label for="">Unit Price: </label>
            <input type="number" name= "harga" min="50000" max="1000000000000" value=<?=$row['harga']?>><br>

            <label for="">Order Date: </label>
            <input type="date" name="tanggal" value=<?=$row['tanggal']?>><br>

            <label for="">Address: </label>
            <input type="text" name="alamat" value=<?=$row['alamat']?>><br>

            <label for="">Payment: </label>
            <select name="pembayaran" id="" value=<?=$row['pembayaran']?>>
                <option value="pc">--Choose--</option>
                <option value="pc">Online Banking</option>
                <option value="ls">Paypal</option>
            </select> <br>

            <button type="submit" name="kirim" id="button1" class="btn btn-primary deep-purple btn-block ">Submit</button>
            
        </form>
    </div>

    <script src="kacans.js"></script>
</body>
</html>