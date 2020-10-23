<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>update staff contact </title>
</head>
<style>
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
  top: 25%;
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
table{
    border-collapse:collapse;
    width:100%;
    font-size:15px;
    text-align: left;
    cell-padding:10;
    }
th{
  text-decoration:underline;
}
</style>
<body onload="if (document.referrer == '') self.location='bblogin.php';">
<form method="post" action="updatecontact.php">
<?php include('errors.php'); ?>
<div class="container">
<div class="box">
<h3>updating contact details</h3>
</br></br>
<label>staff id:</label>
<input type="text" name="idno" required value="<?php echo $idno; ?>"></br></br>
<label>new contact:</label>
<input type="number" min="1000000000" max="9999999999" name="sno" required value="<?php echo $sno; ?>" 
oninvalid="this.setCustomValidity('enter correct 10 digit contact number')"
oninput="this.setCustomValidity('')" /></br></br></br>
<button type="submit" class="btn" name="updatecontact">submit</button>
<input type="reset"/></br></br>
</div>
</div>
</form>
</body>
</html>