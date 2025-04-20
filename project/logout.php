<?php
 include './connection/conn.php';
 session_distroy();
$_SESSION['username'] ='';
header("location:indx.php");
?>
