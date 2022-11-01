<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db, 
        "DELETE FROM kacans WHERE id='$id'");

    if($result){
        header("Location:show2.php");
    }
}
?>