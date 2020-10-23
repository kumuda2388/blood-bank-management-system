<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>blood bank receiver details</title></head>
<style>
.box {
	color:white;
	font-size:20px;
	position: absolute;
    width: 400px;
    padding: 40px;
    border: 2px solid gray;
    margin: 0;
    top: 5%;
    left: 30%;
}
.radio{
	float:right;
}
input{
	float:right;
}
h3{
	text-decoration:underline;
}
body{
   color:white;
   font-size:25px;
   background-image:url("dbmsbb.png");
}
</style>
<body onload="if (document.referrer == '') self.location='bblogin.php';">
<form method="post" action="bbreceiver.php">
<?php include('errors.php'); ?>
<div class="container">
<div class="box">
<h3>receiver details</h3>
</br></br>
<label>hospital name:</label><input type="text" name="hname" onkeypress='return((event.charCode >= 65 &&event.charCode <= 90) ||
 (event.charCode >= 97 &&event.charCode <= 122) || (event.charCode == 32))' required value="<?php echo $hname; ?>" >
</br></br>
<label>hospital id:</label><input type="text" name="hid" required value="<?php echo $hid; ?>" >
</br></br>
<label>doctor name:</label><input type="text" name="drname" onkeypress='return((event.charCode >= 65 &&event.charCode <= 90) ||
 (event.charCode >= 97 &&event.charCode <= 122) || (event.charCode == 32))' required value="<?php echo $drname; ?>" >
</br></br>
<label>patient name:</label><input type="text" name="pname" onkeypress='return((event.charCode >= 65 &&event.charCode <= 90) ||
 (event.charCode >= 97 &&event.charCode <= 122) || (event.charCode == 32))' required value="<?php echo $pname; ?>" >
</br></br>
<label>age:</label><input type ="number" name="age" required value="<?php echo $age; ?>">
</br></br>
<label>gender:<div class="radio"></label><input type="radio" name="gender2" checked value="male" />male</br>
<input type="radio" name="gender2" value="female" />female</br>
<input type="radio" name="gender2" value="transgender" />transgender</br>
</div></br></br></br></br>
<label>blood group:</label>
<div class="radio"><select name="bloodtype2" value="<?php echo $bloodtype2; ?>" >
<option value="o+" selected>o+</option>
<option value="o-">o -</option>
<option value="a+">a +</option>
<option value="a-">a -</option>
<option value="b+">b +</option>
<option value="b-">b -</option>
<option value="ab+">ab +</option>
<option value="ab-">ab -</option>
</select></div>
</br></br>
<label>guardian name:</label><input type="text" name="gname" onkeypress='return((event.charCode >= 65 &&event.charCode <= 90) ||
 (event.charCode >= 97 &&event.charCode <= 122) || (event.charCode == 32))' required value="<?php echo $gname; ?>" >
</br></br>
<label>contact number:</label><input type ="number" name="gno" required min="1000000000" max="9999999999" value="<?php echo $gno; ?>"
oninvalid="this.setCustomValidity('enter correct 10 digit contact number')"
oninput="this.setCustomValidity('')" />
</br></br>
<label>quantity:</label><input type ="number" name="quantity" required value="<?php echo $quantity; ?>">
</br></br>
<input type="submit" name="bbreceiver" /></br>
<input type="reset" />
</div>
 </div>
</form>
</body>
</html>