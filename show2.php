<?php 
    require 'config.php';
    $result = mysqli_query($db, "SELECT * FROM kacans");

    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $query = mysqli_query($db, "SELECT * FROM kacans where 
        nama LIKE '%$keyword%' OR 
        nohp LIKE '%$keyword%' OR 
        harga LIKE '%$keyword%'");
    }else{
        $query = mysqli_query($db, "SELECT * FROM kacans");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kacans.css?v7">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Document</title>
</head>
<body class='show2'>
    <table border='1'>
        <tr>
            <th colspan='9'>
                <form action="" method="GET">
                    <td colspan='2'>
                        <div class="search">
                    <input type="text" name="keyword" id="keyword" placeholder='search'>
                    </div>
                    </td>
                    <td>
                        <button type="submit" name="search">
                             <div class='ikon'><i class="bi bi-search"></i></div>
                        </button>
                    </td>
                </form>
            </th>
        </tr>
        <tr>
            <th colspan='12'>--*Order List*--</th>
        </tr>

        <tr>
            <th>ID</th>
            <th>Name of Buyer</th>
            <th>Number Phone</th>
            <th>Category</th>
            <th>Album Version</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Order Date</th>
            <th>Address</th>
            <th>Payment</th>
            <th colspan='2'>action</th>
        </tr>
        <?php 
            $i = 1;
            $kacans = [];
            // while($row = mysqli_fetch_array($result)){

            while($row = mysqli_fetch_assoc($query)){
                $kacans[] = $row;
            
        ?>
        <tr>
            <td><?=$i; ?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['nohp']?></td>
            <td><?=$row['kategori']?></td>
            <td><?=$row['versi']?></td>
            <td><?=$row['kuantitas']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['alamat']?></td>
            <td><?=$row['pembayaran']?></td>
            <td><a href="edit.php?id=<?=$row['id']?>"> edit </a></+td>
            <td><a href="hapus.php?id=<?=$row['id']?>">hapus</a></td>
        </tr>
            <?php 
             $i++;
                }
            ?>
    </table>

    <script src="kacans.js"></script>

</body>
</html>

