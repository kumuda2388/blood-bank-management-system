<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>login page</title>
</head>
<style>
.box {
color:white;
font-size:20px;
position: absolute;
width: 400px;
padding: 40px;
border: 2px solid gray;
margin: 0;
top: 20%;
left: 30%;
}
input{
	float:right;
}
h2{
  text-decoration:underline;
}
body{
   color:white;
   font-size:25px;
   background-image:url("dbmsbb.png");
}
</style>
<body>
<form method="post" action="login1.php">
<?php include('errors.php'); ?>
<div class="container">
<div class="box">
<h2>login</h2>
</br>
  		<label>email:</label>
  		<input type="email" name="email" required>
</br></br>
  		<label>Password:</label>
  		<input type="password" name="password" required>
</br></br>
  		<button type="submit" class="btn" name="login_user">Login</button>
</br>
  	<p>
  		Not yet a member? <a href="register1.php">Sign up</a>
  	</p>
</div>
<//div>
</form>
</body>
</html>
