<?php
include './style/header.php';
include './connection/conn.php';

// $target_path = "upload/";
// $target_file = $target_path.basename($_FILES['Uploadfile'] ['name']);
// $uploadOk = 1;
// $docFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// check if the file is uploaded;
// if(move_uploaded_file($_FILES['Uploadfile']) ['tmp_name'] $target_path){
//     echo 'file uploaded successfully';
// }else{
//     echo 'file not uploaded';
// }
if(isset($_POST['submit'])){

$filename = $_FILES['Uploadfile']['name'];
$tempfile = $_FILES['Uploadfile']['tmp_name'];  
$folder = "upload/" .$filename;
$file = $_POST['file'];
$supervisor = $_POST['supervisor'];

$s= "INSERT INTO `upload` (`Uploadfile`,`file`,`supervisor`) VALUES('$Uploadfile','$file','$supervisor')";
$r = mysqli_query($conn,$s);
move_uploaded_file($tempfile, $folder);

if($r){
    echo '
    <div class="alert alert-success">
        <h4 class="text-center">Uploaded Successfully</h4>
    </div>
    ';
}else{
    echo 'File Not Uploaded';
}
//check if file exists
if(file_exists($filename)){
    echo 'Sorry File Exist';
    $upload = 0;
}
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="./style/boostrap.css">
    <!-- <script type="text/javascript" src="./java/upload.js"></script> -->
    <style>
        form{
            margin-left:10%;
            margin-right:10%;
        }
        /* .card-body{
            margin-right:10
        } */
    </style>
</head>
<body>
    <!-- <?php include './style/nav.php';?> -->
<div class="container">
        <div class="card col-md-8 my-4">
            <div class="row justify-content-center">
                <div class="card-header text-light text-center  bg-info" style="width:100%;">PROJECT  UPLOAD</div>
                <div class="card-body">
                    <form action="upload.php" method="post"  enctype="multipart/form-data">
                        <label for="">Title</label>
                        <input type="file" name="Uploadfile" id="title" class="form-control" placeholder="Choose File" required> <br>
                        <label for="">File Name</label>
                        <input type="text" name="file" class="form-control" placeholder="Enter File Name" required> <br>
                        <label for="">Supervisor Name</label>
                        <input type="text" name="supervisor" class="form-control" placeholder="Enter Supervisor Name" required> <br>
                        <div class="row justify-content-center">
                            <button type="submit" name="submit"  class="btn btn-primary">Upload </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>