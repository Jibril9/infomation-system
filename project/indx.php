<?php
include './connection/conn.php';

if(isset($_POST['submit'])){
    $reg = $_POST['reg'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `addstudent` where `reg` = '$reg' and `password` ='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)==1){
        echo 'loged In';
        header('location:home.php');
    }else{
        echo 'User Name And passkey is Incorrects';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Student Project System</title>
    <link rel="stylesheet" href="./style/boostrap.css">
    <style>
        body{
            background: #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card col-md-12 my-5">
            <div class="row justify-content-center">
                <div class="card-header text-center text-light bg-info" style="width:100%;">Student Login</div>
                <div class="card-body">
                    <form action="indx.php" method="post">
                        <label for="Regno">User Name/RegNo.:</label>
                        <input type="number" name="reg" class="form-control" placeholder="Enter Your Registration Number" required><br>
                        <label for="password">Password:</label>
                        <input type="number" name="password" class="form-control" maxlength="8" placeholder="Enter Password" required> <br>

                           <div class="form-group form-check">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                        
                        <div class="row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-primary">LogIn</button>
                        </div>
                        <br>
                    </form>
                      <div class="card col-md-12">
                        <div class="row justify-content-center">
                        <div class="card-footer bg-info" style="width:100%;">
                          <a href="forgot.php" class="text-dark" >
                            Forgot Password
                            </a>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>