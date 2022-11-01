<?php

    require 'config.php';

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
        "INSERT INTO kacans (nama, nohp, kategori, versi, kuantitas, harga, tanggal, alamat, pembayaran) 
        VALUES ('$nama','$nohp','$kategori','$versi','$kuantitas','$harga', '$tanggal','$alamat','$pembayaran' )");

        if($result){
            echo "
                <script>
                    alert('Data Berhasil Dikirim');
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
    <link rel="stylesheet" href="kacans.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Document</title>
</head>
<body>
<div class="logo">
        <a href="kacans.html"><h3>Kacansg</h3></a>
        </div>

    <i class="bi bi-brightness-high-fill" id="toggleDark"></i>

    <nav class="navi">
        <a href="logout.php">Logout</a>
        <a href="joinUs.php">Join Us</a>
        <a href="contact_kacans.php">Contact</a>
        <a href="about_kacans.php">About Me</a>
        <a href="category.php">Category</a>
        <a href="kacans.php">Home</a>
    </nav>

    <!-- <div class="slider"></div> -->

    <div class="album1"><img src="https://i.pinimg.com/564x/15/a3/21/15a3215ff98525597e2855a7d25c4b4f.jpg" alt="" width = "20%"><h3>TREASURE 1st Album <br>[The First Step : <br> Treasure Effect] - BLUE <br>Rp379.000</h3><br><h3></h3></div>

    <div class="album2"><img src="https://i.pinimg.com/564x/7a/ee/92/7aee9204e39d16ae983a0a017f5477e1.jpg" alt="" width = "20%"><h3>BLACKPINK - Kill This Love <br> Mini Album Vol. 2 - <br> Pink Version <br>Rp275.000</h3></div>

    <div class="album3"><img src="https://i.pinimg.com/736x/71/53/cc/7153cc5e876fa025f03a41a7f34b1216.jpg" alt="" width = "20%"><h3>BTS - Love Yourself HER <br> [5th Mini Album] <br> Rp299.000</h3></div>

    <div class="album4"><img src="https://i.pinimg.com/564x/d5/60/34/d56034110913237ea0a45b1a4369d48c.jpg" alt="" width = "20%"><h3>TREASURE - Official Lightstick <br> Rp695.000</h3></div>

    <div class="album5"><img src="https://i.pinimg.com/564x/f9/3b/57/f93b57561338735d725f4d098dcc139c.jpg" alt="" width = "20%"><h3>ENHYPEN - Official Lightstick <br> Rp728.525 </h3></div>

    <div class="album6"><img src="https://i.pinimg.com/564x/28/3b/17/283b17303a31b9e79196edf17394b19d.jpg" alt="" width = "20%"><h3>TWICE - Official Lightstick <br> Rp750.000 </h3></div>

    <div class="album7"><img src="https://i.pinimg.com/736x/48/4e/08/484e088d6569f7a9fd456b511f7975e0.jpg" alt="" width = "20%"><h3>TXT : THE DREAM <br> CATCHER ETERNITY <br> Rp329.900 </h3></div>

    <div class="album8"><img src="https://i.pinimg.com/736x/6e/5d/a9/6e5da9c2e4a957e65c7eddceb29eed12.jpg" alt="" width = "20%"><h3>JENNIE (BLACKPINK) - <br> 1st Mini Album[SOLO] <br> Rp687.500</h3></div>

    <div class="album9"><img src="https://i.pinimg.com/564x/3f/0b/c4/3f0bc4d4aa817f57b8e90a8899c01a0e.jpg" alt="" width = "20%"><h3>ITZY - The 1st Album <br>[CRAZY IN LOVE] - KTOWN <br> Rp300.000</div>


    <div class="kotak6">
        <form action="" method = "post">
            
            <p> Order Now</p>
            <label for="">Name of Buyer: </label>
            <input type="text" name="nama"> <br>

            <label for="">Number Phone: </label>
            <input type="number" name="nohp"> <br>

            <label for="">Category: </label>
            <select name="kategori" id="">
                <option value="pc">--Choose--</option>
                <option value="pc">Photo Card</option>
                <option value="ls">Light Stick</option>
                <option value="album">Album</option>
            </select> <br>

            <label for="">Version: </label>
            <input type="text" name="versi"> <br>

            <label for="">Quantity: </label>
            <input type="text" name="kuantitas" min="1" max="100"> <br>

            <label for="">Unit Price: </label>
            <input type="number" name= "harga" min="50000" max="1000000000000"><br>

            <label for="">Order Date: </label>
            <input type="date" name="tanggal"><br>

            <label for="">Address: </label>
            <input type="text" name="alamat"><br>

            <label for="">Payment: </label>
            <select name="pembayaran" id="">
                <option value="">--Choose--</option>
                <option value="banking">Online Banking</option>
                <option value="paypal">Paypal</option>
            </select> <br>

            <button type="submit" name="kirim" id="button1" class="btn btn-primary deep-purple btn-block ">Submit</button>
            
        </form>
    </div>

    <script src="kacans.js"></script>

</body>
</html>