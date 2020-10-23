<?php include('server.php') ?>
<!DOCTYPE html><html>
<head>
<title> blood bank donar details</title></head>
<style>
.radio{
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
  top: 10%;
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
</style>
<body onload="if (document.referrer == '') self.location='bblogin.php';">
<form method="post" action="bbdonar.php">
<?php include('errors.php'); ?>
<div class="container">
<div class="box">
<h3>donar details</h3>
<label>name:	</label><input type="text" name='donarname' onkeypress='return((event.charCode >= 65 &&event.charCode <= 90) ||
 (event.charCode >= 97 &&event.charCode <= 122) || (event.charCode == 32))'  required value="<?php echo $donarname; ?>" >
</br></br>
<label>date of birth:</label><input type= "date" name="dob1" required value="<?php echo $dob1;?>" >
</br></br>
<label>blood group:</label>
<div class="radio"><select name="bloodtype1" required value="<?php echo $bloodtype1; ?>" >
<option value="o+" selected>o+</option>
<option value="o-">o -</option>
<option value="a+">a +</option>
<option value="a-">a -</option>
<option value="b+">b +</option>
<option value="b-">b -</option>
<option value="ab+">ab +</option>
<option value="ab-">ab -</option>
</select>
</div>
<br/></br>
<label>contact no:</label><input type="number" min="1000000000" max="9999999999" name="contact_no1" required value="<?php echo $contact_no1; ?>" 
oninvalid="this.setCustomValidity('enter correct 10 digit contact number')"
oninput="this.setCustomValidity('')" />
<br /></br>
<label>weight:</label><input type ="number" name="weight" required value="<?php echo $weight; ?>">
<br/></br>
<label>gender:</label>
<div class="radio">male<input type="radio" name="gender1" value="male" checked/></br>
female<input type="radio" name="gender1" value="female" /></br>
transgender<input type="radio" name="gender1" value="transgender" /></br>
</div>
<br/></br></br></br>
<input type="submit" name="bbdonar" /></br>
<input type="reset" name="bbdonar" />
</div>
</div>
</body>
</form>
</html>