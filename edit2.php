<?php
    require 'config.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    // $result = mysqli_query($db, 
    // "SELECT * FROM join2 WHERE id='$id'");
    // $row = mysqli_fetch_array($result);
    if(isset($_POST['submit'])){
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];
        $birth = $_POST['birth'];
        $nohp = $_POST['nohp'];
        $category = $_POST['category'];

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$akhir.$ekstensi";

        $tmp = $_FILES['gambar']['tmp_name'];
        
        if(move_uploaded_file($tmp, "gambar/".$gambar_baru)){
            $query = 
            "UPDATE join2 SET 
                awal='$awal',
                akhir='$akhir',
                birth='$birth',
                nohp='$nohp',
                category='$category',
                gambar = '$gambar_baru'
            WHERE id='$id'";
            $result = $db->query($query);

            if($result){
                header("Location:show.php");
            }else{
                echo "gagal kirim";
            }  
        }
        else {
            echo "GAGAL";
        }
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

    <div><h1 class="teks5">Edit Your Join Form</h1></div>
    <div class="kotak8">
        <form action="" method="POST"  enctype="multipart/form-data">
            <label for="">First Name: </label> 
            <input type="text" name="awal" required> <br>

            <label for="">Last Name: </label> 
            <input type="text" name="akhir" required> <br>

            <label for="">Birth Date: </label>
            <input type="date" name="birth" required> <br>

            <label for="">Number Phone: </label>
            <input type="number" min="0" max="1000000000000" name="nohp" required><br>

            <label for="">Category: </label>
            <select name="category" id="" required>
                <option value="">--Choose--</option>
                <option value="Regular">Regular</option>
                <option value="Bronze">Bronze</option>
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
                <option value="Platinum">Platinum</option>
            </select> <br>

            <label for="">Your Photo: </label><br><br>
            <input type="file" name="gambar" required><br><br>

            <button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block ">Change</button>
            
        </form>
    </div>


    <script src="kacans.js"></script>
</body>
</html>