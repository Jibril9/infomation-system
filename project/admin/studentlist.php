<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Added Student List</title>
    <link rel="stylesheet" href="./styl/boostrap.css">
    <style>
        body{
            background:#ccc;
        }
    </style>
</head>
<body>
    <button type="submit" name="submit" class="btn btn-primary my-4"><a href="hom.php" class="text-light">Home</a></button>

    <div class="card-header text-center text-light bg-info" style="width:100%;">List Of Added Students</div>

    <table class="table" style="width:100%;">
        <thead>
            <tr>
                <th>SN</th>
                <th>Registration Number</th>
                <th>Student Name</th>
                <th>supervisorId</th>
                <th>programe</th>
                <th>session</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../connection/conn.php';

              $s = "SELECT * FROM `addstudent`";
              $r = mysqli_query($conn,$s);
              if($r){
                while($row= mysqli_fetch_assoc($r)){

                    $id = $row['id'];
                    $reg = $row['reg'];
                    $sname = $row['sname'];
                    $supervisorId = $row['supervisorId'];
                    $programe = $row['programe'];
                    $session = $row['session'];

                    echo '<tr>
                    <th>'.$id.'</th>
                    <td>'.$reg.'</td>
                    <td>'.$sname.'</td>
                    <td>'.$supervisorId.'</td>
                    <td>'.$programe.'</td>
                    <td>'.$session.'</td>
                    </tr>';
                }
              }
            ?>
        </tbody>
    </table>
              
    
</body>
</html>