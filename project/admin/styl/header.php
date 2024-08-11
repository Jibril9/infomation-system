<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 20px; 
  line-height: 25px;
  border-radius: 4px;
  
}

/* .header a.logo {
  font-size: 25px;
  font-weight: bold;
} */

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
<link rel="stylesheet" href="boostrap.css">
</head>
<body>

<div class="header">
  <a href="" class="">Admin DashBoard</a>
  <div class="header-right">
    <a class="active" href="log.php">Logout</a>
    
  </div>
</div>

<!-- <div style="padding-left:20px">
  <h1>Responsive Header</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>Some content..</p>
</div> -->

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_responsive_header by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:38:47 GMT -->
</html>
