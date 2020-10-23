<html>
<head>
<title>blood bank home page</title></head>
<style>
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
a{
    color:white;
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
<div class="container">
<div class="box">
<h3>blood bank home page</h3>
<a href="bbdonar.php" >enter donar details</a></br></br>
<a href="bbreceiver.php" >enter receiver details</a></br></br>
<a href="bbstaff.php" >enter staff details</a></br></br>
<a href="viewdonar.php" >view donar details</a></br></br>
<a href="viewreceiver.php" >view receiver details</a></br></br>
<a href="viewstaff.php" >view staff details</a></br></br>
<a href="viewwishtodonate.php" >view details who wish to donate</a></br></br>
<a href="viewblooddetails.php" >view available blood units in bloodbank</a></br></br>
<p>update staff details <p><ul>
<li><a href="updateaddress.php" >update address details</a></br></li>
<li><a href="updatesalary.php" >update salary details</a></br></li>
<li><a href="updatecontact.php" >update contact details</a></br></li></ul>
</div></div>
</body>
</html>