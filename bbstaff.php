<?php include('server.php') ?>
<!DOCTYPE html><html>
<head>
<title> blood bank staff details</title></head>
<style>
body{
   color:white;
   font-size:25px;
    background-image:url("dbmsbb.png");
}
.radio{
	float:right;
}
.r{
  float:left;
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
  top: 5%;
  left: 30%;
}
h3{
	text-decoration:underline;
}
</style>
<body onload="if (document.referrer == '') self.location='bblogin.php';">
<form method="post" action="bbstaff.php">
<?php include('errors.php'); ?>
<div class="container">
<div class="box">
<h3>staff details</h3>
</br></br>
<label>name:</label><input type="text" name="staffname" onkeypress='return((event.charCode >= 65 &&event.charCode <= 90) ||
 (event.charCode >= 97 &&event.charCode <= 122) || (event.charCode == 32))' required value="<?php echo $staffname; ?>" >
</br></br>
<label>staff id no.:</label><input type="text" name="idno" required value="<?php echo $idno; ?>" >
</br></br>
<label>designation:</label><input type="text" name="designation" onkeypress='return((event.charCode >= 65 &&event.charCode <= 90) ||
 (event.charCode >= 97 &&event.charCode <= 122) || (event.charCode == 32))' required value="<?php echo $designation; ?>" >
</br></br>
<label>gender:</label><div class="radio"><input type="radio" name="gender3" value="male" checked/>male</br>
<input type="radio" name="gender3" value="female" />female</br>
<input type="radio" name="gender3" value="transgender" />transgender</br>
</div>
</br></br></br></br>
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
<label>salary:</label><input type="number" name="salary" required value="<?php echo $salary; ?>" >
</br></br>
<label>address:</label><input type="text" name="address" required value="<?php echo $address; ?>" >
</br></br>
<label>pincode:</label><input type="number" name="pincode" required value="<?php echo $pincode; ?>" >
</br></br>
<label>contact no:</label><input type="number" min="1000000000" max="9999999999" name="sno" required value="<?php echo $sno; ?>" 
oninvalid="this.setCustomValidity('enter correct 10 digit contact number')"
oninput="this.setCustomValidity('')" />
</br></br>
  	  <button type="submit" class="btn" name="bbstaff">submit</button>
</br></br>
<input class="r" type="reset" />
</form>
</body>
</html>