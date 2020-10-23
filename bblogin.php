<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>blood bank login page</title>
</head>
<style>
button{
	float:right;
}
input{
	float:right;
}
.box {
	color:white;
	font-size:20px;
	position: absolute;
  width: 400px;
  padding: 40px;
  border: 2px solid gray;
  margin: 0;
  top: 30%;
  left: 30%;
}
body{
   color:white;
   font-size:25px;
   background-image:url("dbmsbb.png");
}
h3{
	text-decoration:underline;
}
</style>
<body>
<form method="POST" action="bblogin.php">
<?php include('errors.php'); ?>
<div class="container">
<div class="box">
<h3>blood bank login details</h3>
</br><label>password:<input type="password" name="password1" required value="<?php echo $password1; ?>"> 
<br/></br><button type="submit" class="btn" value="submit" name="bblogin">login</button>
</div>
</div>
</form>
</body>
</html>
