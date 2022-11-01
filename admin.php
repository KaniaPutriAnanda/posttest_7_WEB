<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM kacans");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="kacans.css">
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
    </nav>

    <h3>Data Produk</h3>
    <a href="input.php">Tambah Produk</a><br>

    <table border='1'>
        <tr>
            <th>id</th>
            <th>nama produk</th>
            <th>kategori</th>
            <th>gambar produk</th>
            <th>harga</th>
            <th>tanggal rilis</th>
            <th colspan='2'>action</th>
        </tr>
        <?php 
            $i = 1;
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$i; ?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['kategori']?></td>
            <td><?=$row['foto']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['tanggal']?></td>
            <td><a href="edit.php?id=<?=$row['id']?>"> edit </a></+td>
            <td><a href="hapus.php?id=<?=$row['id']?>">hapus</a></td>
        </tr>
            <?php 
             $i++;
                }
            ?>
    </table>
</body>
</html>