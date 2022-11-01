<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kacans.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Document</title>
</head>
<body>
<div class="logo">
    <a href="kacans.php"><h3>Kacansg</h3></a>
    </div>

    <i class="bi bi-brightness-high-fill" id="toggleDark"></i>

<table border=1>
        <tr>
            <th>no</th>
            <th>first Name</th>
            <th>last name</th>
            <th>birth date</th>
            <th>number phone</th>
            <th>category</th>
            <th>Photo</th>
            <th colspan='2'>action</th>
        </tr>
            <?php
                require 'config.php';
                $result = $db->query("SELECT * FROM join2");
                $i = 1;
                while($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['awal']?></td>
            <td><?=$row['akhir']?></td>
            <td><?=$row['birth']?></td>
            <td><?=$row['nohp']?></td>
            <td><?=$row['category']?></td>
            <td><img src="gambar/<?=$row['gambar']?>" alt="" width="100px"></td>
            <td><a href="edit2.php?id=<?=$row['id']?>"> edit </a></+td>
            <td><a href="hapus2.php?id=<?=$row['id']?>">hapus</a></td>
        </tr>
            <?php
                $i++; }
            ?>
    </table>
    <script src="kacans.js"></script>
</body>
</html>