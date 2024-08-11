<?php
session_start();
include '../connection/conn.php';
if(isset($_POST['submit'])){

$user = $_POST['user'];
$password = $_POST['password'];

$s = "SELECT * FROM `login` WHERE `user`= '$user' AND `password`= '$password'";
$r = mysqli_query($conn,$s);
if(mysqli_affected_rows($conn)==1){
    echo '<div class="alert alert-success"> Loged In </div>';
    header('location:hom.php');
    exit();
    
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./styl/boostrap.css">
    <style>
        body{
            background:#ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card col-md-12 my-5">
            <div class="row justify-content-center">
                <div class="card-header text-light text-center bg-info" style="width:100%;">Admin</div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <label for="">User Name</label>
                        <input type="text" name="user" class="form-control" placeholder="Enter Admin User Name" required> <br>
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" mexlength="8" placeholder="123xxx" required>
                        <br>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </div>
                        <br>
                        <div class="card col-md-12">
                        <div class="row justify-content-center">
                        <div class="card-footer bg-info" style="width:100%;">
                          <a href="frgt.php" class="text-dark" >
                            Forgot Keys
                            </a>  
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>