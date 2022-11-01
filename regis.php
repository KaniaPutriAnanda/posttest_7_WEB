<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kacans.css?v3">
    <title>Document</title>
</head>
<body>
    <div class="logo">
        <a href="kacans.php"><h3>Kacansg</h3></a>
    </div>

    <div class=kotak9>

        <div class="judul">
            <h2>Registration</h2>
        </div>

        <div class="kotak10">
            <form action="" method="post">

                <label for="email">Email</label><br>
                <input type="email" name="email" class="input" placeholder="Masukkan email"><br>

                <label for="username">Username</label><br>
                <input type="text" name="username" class="input" placeholder="Masukkan username"><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" class="input" placeholder="Password"><br>

                <label for="konfirmasi">Konfirmasi Password</label><br>
                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password"><br>

                <button type="submit" name="regis" id="button1" class="btn btn-primary deep-purple btn-block " value="Registrasi">Registration</button>
            </form>

            <p>Already have an account??
                <a href="login.php">Login</a>
            </p>

        </div>
    </div>
</body>
</html>

<?php
    require 'config.php';

    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // cek username udah digunakan atau belum
        $sql = "SELECT * FROM akun WHERE username='$username'";
        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('username telah digunakan, silahkan gunakan username lain')
                </script>";
        }else{
            // cek konfirmasi password
            if($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO akun (email, username, psw)
                            VALUES ('$email', '$username', '$password')";
                $result = $db->query($query);

                if($result){
                    echo "<script>
                    alert('Registrasi Berhasil')
                </script>";
                }else{
                    echo "<script>
                    alert('Registrasi Gagal')
                </script>";
                }
            }else{
                echo "<script>
                    alert('konfirmasi password salah!')
                </script>";
            }
        }
    }

?>