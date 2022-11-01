<?php
    require 'config.php';
    if(isset($_POST['submit'])){
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];
        $birth = $_POST['birth'];
        $nohp = $_POST['nohp'];
        $category = $_POST['category'];
        $tglDaftar = $_POST['tglDaftar'];

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$akhir.$ekstensi";

        $tmp = $_FILES['gambar']['tmp_name'];
        
        if(move_uploaded_file($tmp, "gambar/".$gambar_baru)){
            $query = "INSERT INTO join2
            VALUES ('', '$awal', '$akhir', '$birth', '$nohp', '$category','$tglDaftar', '$gambar_baru')";

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
    <title>Join Us Form</title>
    <link href="kacans.css?v6" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>
    <div class="logo">
            <a href="kacans.php"><h3>Kacansg</h3></a>
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
    
    <div class="teks4">Join as a Member to Get More Benefits</div>
    <div class="foto3"><img src="https://i.pinimg.com/564x/e2/e0/7c/e2e07ca4aae92e4832b04459d266a10b.jpg" alt="" width="370px"></div>
    <div><h1 class="teks3">Join Us Form</h1></div>
    <div class="kotak5">
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

            <input type="hidden" name="tglDaftar" value=<?=date("d-m-Y")?>>
            <button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block ">Join</button>
            
        </form>
    </div>

    <script src="kacans.js"></script>
</body>
</html>
