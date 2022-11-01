<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kacans.css?v1">
    <title>Document</title>
</head>
<body>
<div class="logo">
        <a href="kacans.html"><h3>Kacansg</h3></a>
        </div>

<div class="kotak11">
        <div class="form-login">
            <h3>Login</h3>
            <form action="" method="post">
                <input type="text" name="user" placeholder="email or username" class="input">
                <input type="password" name="password" placeholder="password" class="input">

                <button type="submit" name="login" id="button1" class="btn btn-primary deep-purple btn-block ">Login</button>
            </form>

            <p>Don't have an account yet?
                <a href="regis.php">Registration</a>
            </p>
        </div>
    </div>
</body>
</html>

<?php

    session_start();
    require 'config.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM akun WHERE username='$user' OR email='$user'";
        $result = $db->query($sql);

        //cek akun ada atau gak
        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);
            $username = $row['username'];

            //cek passwordnya valid
            if(password_verify($password, $row['psw'])){

                $_SESSION['login'] = $username;

                echo "<script>
                        alert('Selamat Datang $username');
                        document.location.href = 'kacans.php';
                        </script>";
            }else{
                echo "<script>
                        alert('Username dan Password salah');
                        </script>";
            }
        } else{
            echo "<script>
                        alert('Buat akun terlebih dahulu');
                        </script>";
        }
    }

?>