<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>registration</title>
</head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
body{
   color:white;
   font-size:25px;
   background-image:url("dbmsbb.png");
}
.box {
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
</style>
<body>
<form method="post" action="register1.php">
<?php include('errors.php'); ?>
<div class="container">
<div class="box">
<h2>Register</h2>
<label>adhaar card no:</label>
<input type="number" min="200000000000" max="999999999999" name="username" required value="<?php echo $username; ?>" 
oninvalid="this.setCustomValidity('enter correct 12 digit adhaar card number')"
oninput="this.setCustomValidity('')" />
</br></br>
      <label>Email:</label>
      <input type="email" name="email" required value="<?php echo $email; ?>">
</br></br>
  	  <label>Password:</label>
  	  <input type="password" required name="password_1">
</br></br>
  	  <label>Confirm password:</label>
  	  <input type="password" required name="password_2">
</br></br>
  	  <button type="submit" class="btn" name="reg_user">Register</button>
    <p>
  		Already a member and want to update details? <a href="login1.php">Sign in</a>
  	</p>
</div>
</div>
</form>
</body>
</html>
 



