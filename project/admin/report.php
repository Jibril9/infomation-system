<?php

require_once  './vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('<h1>Hello world!</h1>');

$mpdf->Output();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repot</title>
    <link rel="stylesheet" href="../styl/boostrap.css">
    <style>
        body{
          background:#ccc;  
        }
    </style>
</head>
<body>
    
</body>
</html>