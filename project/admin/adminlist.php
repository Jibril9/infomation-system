<?php
include  '../connection/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Table</title>
    <link rel="stylesheet" href="./styl/boostrap.css">
    <style>
       body{
        background-color: #ccc;
       } 
    </style>
</head>
<body>
    <button type="submit" name="submit" class="btn btn-primary my-4"><a href="hom.php" class="text-light">Home</a></button> 

    <div class="card-header text-center text-light bg-info" style="width: 100%;">LIST OF ADMINS</div>
        <!-- table -->
   <table class="table" style="width:100%;">
    <thead>
        <tr>
            <th>SN</th>
            <th>User Name</th>
            <th>Full Name</th>
            <th>Password</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       <?php
       $s = "SELECT * FROM `adduser` ";
       $r = mysqli_query($conn,$s);
       if($r){
        while($row = mysqli_fetch_assoc($r)){
            $id = $row['id'];
            $user = $row['user'];
            $fullname = $row['fullname'];
            $password = $row['password'];
            $role = $row['role'];

            echo '<tr>
            <th>'.$id.'</th>;
            <td>'.$user.'</td>
            <td>'.$fullname.'</td>
            <td>'.$password.'</td>
            <td>'.$role.'</td>
            <td>
            <button class="btn btn-primary" name="resetid"><a href="reset.php?resetid='.$id.'" class="text-light">Reset</a>
            </button>
            <button class="btn btn-danger" name="deactivateid"><a href="deactivate.php?deactivateid='.$id.'" class="text-light">Deactivate</a>
            </button>
            <td>
            </tr>';
        }
       }
       ?>
    </tbody>
   </table>
</body>
</html>