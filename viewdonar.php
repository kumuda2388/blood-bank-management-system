<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>view donar details</title>
</head>
<style>
body{
  color:white;
  font-size:25px;
  background-image:url("dbmsbb.png");
}
table{
    border-collapse:collapse;
    width:100%;
    font-size:25px;
    text-align: left;
    cell-padding:10;
    }
th{
    text-decoration:underline;
  }
</style>
<body onload="if (document.referrer == '') self.location='bblogin.php';">
<form method="post" action="viewdonar.php">
<?php include('errors.php'); ?>
<p>enter the date for which you want to see donar details:
<input type="date" name="date1" required value="<?php echo $date1; ?>"><p>
<button type="submit" class="btn" name="viewdonar">submit</button></br></br>
<a href="viewfulldonar.php" >click to see the entire donar table</a>
</form>
</body>
</html>