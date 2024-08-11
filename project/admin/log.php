<?php
 include '../connection/conn.php';
 if(isset($_POST['log'])){
    echo 'You have Successsfully Logged Out';
    header('location:login.php');
    exit();
 }
?> 