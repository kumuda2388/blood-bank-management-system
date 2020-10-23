<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>blood bank management system</title>
</head>
<style>
h2{
    text-decoration:underline;
   }
body{
   color:white;
   font-size:25px;
   background-image:url("dbmsbb.png");
}
.radio1{
	float:right;
}
input{
	float:right;
}
button{
	float:right;
}
.box {
	color:white;
	font-size:20px;
	position: absolute;
  width: 600px;
  padding: 40px;
  border: 2px solid gray;
  margin: 0;
  top: 20%;
  left: 25%;
}
</style>
<body onload="if (document.referrer == '') self.location='login1.php';">
<form method="POST" action="updatewishtodonate.php" name="updatewishtodonate">
<?php include('errors.php'); ?>
<div class="box">
<h2>updating values</h2>
<label>contact no:</label><input type="number" min="1000000000" max="9999999999" name="contact_no" required value="<?php echo $contact_no; ?>" 
oninvalid="this.setCustomValidity('enter correct 10 digit contact number')"
oninput="this.setCustomValidity('')" />
</br></br>
<label>did you undergo a surgery within 3 months??</label>
<div class="radio1"><input type="radio" name="ans" value="yes"  />yes
</br>
<input type="radio" name="ans" value="no" checked/>no
</div></br></br></br>
<label>did you donate blood in last 3 months??</label>
<div class="radio1"><input type="radio" name="blood" value="yes"  />yes
</br>
<input type="radio" name="blood" value="no" checked/>no
</div></br></br></br>
<label>any medical history we should be well aware of?</label>
<div class="radio1">
<input type="text" name="medical_details" onkeypress='return((event.charCode >= 65 &&event.charCode <= 90) ||
 (event.charCode >= 97 &&event.charCode <= 122) || (event.charCode == 32))'  placeholder="none in case of no details" value="<?php echo $medical_details; ?>" >
</div>
</br></br></br>
<button type="submit" class="btn" name="updatewishtodonate">enter</button>
</div>
</form>
</body>
</html>