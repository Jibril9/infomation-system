<?php
include '../connection/conn.php';


if(isset($_POST['submit'])){
    $reg = $_POST['reg'];
    $supervisorId = $_POST['supervisorId'];
    $sname = $_POST['sname'];
 
 
    $session = $_POST['session'];
    $programe = $_POST['programe'];

    $sql = "INSERT INTO `addstudent` (`reg`,`supervisorId`,`sname`,`programe`, `session`)  
     VALUES ('$reg','$supervisorId','$sname','$programe','$session')";
    $result = mysqli_query($conn,$sql);
    $no = mysqli_affected_rows($conn);
    if($no>=1){
        echo "$no record Inserted Successfully";
    }else{
        echo "Not Inserted";
    }
    // echo $no;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="../style/boostrap.css">
    <style>
        body{
            background: #ccc;
        }
    </style>
</head>
<body>
    <button type="submit" class="btn  btn-primary my-4"><a href="hom.php"  class="text-light">Home</a></button>
    <div class="container">
        <div class="card col-md-12  my-4">
            <div class="row justify-content-center">
                <div class="card-header text-center text-light bg-info" style="width:100%">Add User</div>
                <div class="card-body">
                    <form action="addstudent.php" method="post">
                        <label for="">Reg No.:</label>
                        <input type="text" name="reg" class="form-control" placeholder="Enter Registration Number of A Student" required> <br>
                        <label for="">Supervisor Id:</label>
                        <select name="supervisorId" class="form-control">
                            <option>Supervisor</option>
                            <option>Dr.Sani</option>
                        </select> <br>
                        <label for="">Name:</label>
                        <input type="text" name="sname" class="form-control" placeholder="Enter Student Name" required> <br>
                        <label for="">Programe:</label>
                        <select  id="" name="programe" class="form-control">
                            <option >Select A Programe</option>
                            <option>Computer Sciences</option>
                            <option ></option>
                        </select><br>

                        <label for="">session:</label>
                        <select  id="" name="session" class="form-control">
                            <option >Select A session</option>
                            <option value="2020/2021">2020/2021</option>
                            
                        </select><br>
                        <!-- <label for="">Password</label>
                        <input type="number" name="password" class="form-control" placeholder="Enter Password"> <br> -->
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