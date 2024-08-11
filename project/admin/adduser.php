<?php
include  '../connection/conn.php';

if(isset($_POST['submit'])){
   $user = $_POST['user'];
   $password = $_POST['password'];
   $role = $_POST['role'];
   $fullname = $_POST['fullname'];

   $s = "INSERT INTO `adduser` (`user`,`password`,`role`,`fullname`)  VALUES ('$user','$password','$role','$fullname')";
   $r = mysqli_query($conn,$s);
   $no = mysqli_affected_rows($conn);
   if($no>=1){
     echo '<div class="alert alert-success"> '.$no.' Record Successfully Added</div>';
     header('location:');
   }else{
       echo "Admin Not Added";
   }
        // $query = mysqli_query("SELECT user FROM `adduser` WHERE user= '$user' ");
        // if(mysqli_affected_rows($query) !=0){
        //     echo 'user already exits';
        // }
}
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Admin</title>
    <link rel="stylesheet" href="../style/boostrap.css">
    <style>
        body{
            background:#ccc;
        }
    </style>
</head>
<body>
    <button type="submit" class="btn btn-primary my-4"><a href="hom.php" class="text-light">Home</a></button>
    
    <div class="container">
        <div class="card col-md-12 my-5">
            <div class="row justify-content-center">
                <div class="card-header text-light text-center bg-info" style="width:100%;">Add Admin</div>
                <div class="card-body">
                    <form action="adduser.php" method="post">
                        <label for="">User Name</label>
                        <input type="text" name="user" class="form-control" placeholder="Enter User Name" required> <br>
                        <label >Full Name</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Enter Full  Name Of The User" required> <br>
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" maxlength="8" placeholder="123xxxx" required> <br>
                        <label for="">Role</label>
                        <select  id="" name="role" class="form-control">
                            <option >Select Role</option>
                            <option >Admin</option>
                            <option>Supervisor</option>
                        </select>
                        <br>
                        <!-- <label for="">Name</label>
                        <input type="text" name="suna" class="form-control" placeholder="Enter Name" required> <br> -->
                        <div class="row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>