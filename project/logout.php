<?php
 include './connection/conn.php';
 if(isset($_POST['logout'])){
    echo 'Successsfully Logged Out';
    header('location:indx.php');
    exit();
 }
?>