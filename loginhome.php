<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>blood bank login page</title>
</head>
<style>
.box {
	color:white;
	font-size:40px;
	position: absolute;
  width: 400px;
  padding: 40px;
  border: 2px solid gray;
  margin: 0;
  top: 20%;
  left: 30%;
}
body{
   color:white;
   font-size:20px;
   background-image:url("dbmsbb.png");
}
a{
    color:white;
}
</style>
<body onload="if (document.referrer == '') self.location='login1.php';">
<div class="container">
<div class="box">
<a href="wishtodonate.php" >enter your details</a></br></br>
<a href="updatewishtodonate.php" >update your details</a></br></br>
</div>
</div>
</body>
</html>
