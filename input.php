<?php

    require 'config.php';

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $foto = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $harga = $_POST['harga'];
        $tanggal = $_POST['tanggal'];
        move_uploaded_file($file_tmp, 'file/'.$foto);

        $result = mysqli_query($db, 
        "INSERT INTO kacans (nama, kategori, foto, harga, tanggal) 
        VALUES ('$nama','$kategori','$foto', '$harga', '$tanggal')");

        if($result){
            echo "
                <script>
                    alert('Data Berhasil Dikirim');
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
    <link href="kacans.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="logo">
        <a href="kacans.html"><h3>Kacansg</h3></a>
        </div>

        <nav class="navi">
        <a href="#">Delete Product</a>
        <a href="about_kacans.php">Change Product</a>
        <a href="contact_kacans.php">All Product</a>
        <a href="input.php">Add New Product</a>
        <a href="kacans.php">Home</a>

<div><h1 class="">Menambahkan Produk</h1></div>
    <div class="">
        <form action="">
            
            <label for="">Nama Produk: </label>
            <input type="text" name="nama"> <br>

            <label for="">Kategori: </label>
            <select name="kategori" id="">
                <option value="pc">Photo Card</option>
                <option value="ls">Light Stick</option>
                <option value="album">Album</option>
            </select> <br>

            <label for="">Gambar Produk: </label>
            <input type="file" name="foto" accept="image/*"> <br>

            <label for="">Harga: </label>
            <input type="number" name= "harga" min="50000" max="1000000000000"><br>

            <label for="">TanggaL Rilis: </label>
            <input type="date" name="tanggal"><br>

            <button type="submit" name="kirim" id="button1" class="btn btn-primary deep-purple btn-block ">Tambahkan</button>
            
        </form>
    </div>
</body>
</html>