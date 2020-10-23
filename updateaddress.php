<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>update staff address</title>
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
h3{
    text-decoration:underline;
}
body{
   color:white;
   font-size:25px;
   background-image:url("dbmsbb.png");
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
<form method="post" action="updateaddress.php">
<?php include('errors.php'); ?>
<div class="container">
<div class="box">
<h3>updating address details</h3>
</br></br>
<label>staff id:</label>
<input type="text" name="idno" required value="<?php echo $idno; ?>"></br></br>
<label>new address:</label>
<input type="text" name="address" required value="<?php echo $address; ?>"></br></br>
<label>new pincode:</label>
<input type="number" name="pincode" required value="<?php echo $pincode; ?>"></br></br></br>
<button type="submit" class="btn" name="updateaddress">submit</button>
<input type="reset"/></br></br>
</div>
</div>
</form>
</body>
</html>