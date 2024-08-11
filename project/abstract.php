<?php
include './style/header.php';
include './connection/conn.php';


if(isset($_POST['submit'])){
    $abstract = $_POST['abstract'];

    $s = "INSERT INTO `abstract` (`abstract`) VALUES ('$abstract')";
    $r = mysqli_query($conn,$s);
    if($r){
        $message = "Inserted Successfully";
    }else{
        $message = "Not Inserted";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract</title>
    <link rel="stylesheet" href="./style/boostrap.css">
    <style>
        body{
            background:#ccc;
        }
        p{
            color: black;
            font-size: 15px;
            
        }
    </style>
</head>
<body>
    <?php include './style/nav.php';?>
    
    <div class="container">
    <div class="card col-md-8 my-4">
        <div class="row justify-content-center">
        <div class="card-header text-center text-light bg-info" style="width:100%;">Upload Your Abstract</div>
            <div class="card-body ">
                <form action="" method="post">
                    <label for="">Abstract:</label> <br>
                    <!-- <input type="text" name="abstract" class="form-control"  placeholder="write Your Abstract Here" required> <br> -->
                    <textarea name="abstract" id="" cols="40" style="width:100%;" values=" echo $abstract " class="" rows="10"></textarea>
                    <div class="row justify-content-center">
                        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                    </div>
                    <br>
                    <p class="text-center"> Make Sure You Upload Your Abstract Correctly.</p>
                </form>
            </div>
        </div>
       
    </div>
</div>
</body>
</html>